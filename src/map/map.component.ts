import { Component, OnInit, OnDestroy } from '@angular/core';

import { Map, MapService }  from './map.service';
import { Subscription }       from 'rxjs/Subscription';

@Component({
  selector: 'app-root',
  templateUrl: './map.component.html',
  styleUrls: ['./map.component.css'],
  providers: [MapService]
})
export class MapComponent implements OnInit, OnDestroy {
	private map: Map;
	private sub: Subscription;

	constructor(
    private service: MapService
	) { }

	ngOnInit() {
		this.service.getMap()
			.then(map => this.map = map);
	}

	ngOnDestroy() {
		this.sub.unsubscribe();
	}

	tileClicked(i, j) {
		alert(i + ", " + j);
	}
}
