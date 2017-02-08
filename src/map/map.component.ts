import { Component, OnInit, OnDestroy } from '@angular/core';

import { Map, MapService }  from './map.service';
import { Subscription }       from 'rxjs/Subscription';

declare var $: any

@Component({
  selector: 'app-root',
  templateUrl: './map.component.html',
  styleUrls: ['./map.component.css'],
  providers: [MapService]
})
export class MapComponent implements OnInit, OnDestroy {
	private map: Map;
	private sub: Subscription;
    private roads: number[];
    private currentlySelectedTile: {i: 0, j: 0 };

    constructor(
        private service: MapService,
	) {
        this.roads = [1,2,3,4,5,6,7,8,9,10,11];
    }

	ngOnInit() {
		this.service.getMap()
			.then(map => this.map = map);
	}

	ngOnDestroy() {
		this.sub.unsubscribe();
	}

	tileClicked(i, j) {
        var self = this;
        $('#road-selector-dialog').modal('show');

        this.currentlySelectedTile = {
            i: i,
            j: j
        };
	}

    applyRoad(road) {
        if (road > 0) {
            if (this.map[this.currentlySelectedTile.i][this.currentlySelectedTile.j].terrain.toString()[0] == 3) {
                this.map[this.currentlySelectedTile.i][this.currentlySelectedTile.j].road = road;
            } else {
                alert('Cannot place road there');
            }
        } else {
            delete(this.map[this.currentlySelectedTile.i][this.currentlySelectedTile.j].road);
        }
        $('#road-selector-dialog').modal('hide');
    }
}
