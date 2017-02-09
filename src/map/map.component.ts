import { Component, OnInit, OnDestroy, ChangeDetectorRef } from '@angular/core';

import { Map, MapService }  from './map.service';
import { Subscription }       from 'rxjs/Subscription';

declare var $: any

@Component({
  selector: 'app-root',
  templateUrl: './templates/map.component.html',
  styleUrls: ['./styles/map.component.css'],
  providers: [MapService]
})
export class MapComponent implements OnInit, OnDestroy {
	private map: Map;
	private sub: Subscription;
    private roads: number[];

    constructor(
        private service: MapService,
        private ref: ChangeDetectorRef
	) {
        var self = this;
        this.roads = [3,4,1,6,5,2,8,9,10,7,11];

        // when document is ready - initialize the draggables
        $(document).ready(function() {
            self.setDraggableRoadSelector()
            self.setDraggableRoads();
        });
    }

	ngOnInit() {
		this.service.getMap()
			.then(map => this.map = map);
	}

	ngOnDestroy() {
		this.sub.unsubscribe();
	}

    /**
     * Make all roads in roads selector draggable and can be placed on the map
     */
    setDraggableRoadSelector() {
        var self = this;
        $('.road-selector-draggable').draggable({helper:'clone'});
        $('.tile').droppable({
            accept: ".road-selector-draggable",
            drop: function(event,ui) {
                var i = $(this).data("i");
                var j = $(this).data("j");
                self.applyRoad($(ui.draggable).data("road"), i, j);
            }
        });
    }

    /**
     * Make all roads placed on the map are draggable and can be removed from the map
     */
    setDraggableRoads() {
        var self = this;
        $('.placed-road-draggable').draggable({revert: 'invalid'});
        $('.road-removal').droppable({
            accept: ".placed-road-draggable",
            classes: {
                "ui-droppable-active": "bg-primary",
            },
            drop: function(event,ui) {
                var i = $(ui.draggable).parent().data("i");
                var j = $(ui.draggable).parent().data("j");
                self.applyRoad(0, i, j);
                // remove the element
                $(ui.draggable).hide("fast", function() {
                    $(this).remove();
                });
            }
        })
    }

    /**
     * Add or remove road from map
     * @param number road Road identifier
     * @param number i    i coordinate
     * @param number j    j coordinate
     */
    applyRoad(road, i, j) {
        this.ref.detach();
        if (road > 0) {
            // if it is regular terrain then allow to place the road on that tile
            if (this.map[i][j].terrain.toString()[0] == 3) {
                this.map[i][j].road = road;
            } else {
                alert('Cannot place road there');
            }
        } else {
            delete(this.map[i][j].road);
        }
        // force detect change as angular cannot see changes caused by jquery.ui events
        this.ref.detectChanges();
        // renew the draggable for possible new tiles on the map
        this.setDraggableRoads();
    }
}
