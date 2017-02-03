import { Injectable } from '@angular/core';
import { Headers, Http } from '@angular/http';
import 'rxjs/add/operator/toPromise';

export class Map {
  constructor(
    public type: string,
  ) { }
}

@Injectable()
export class MapService {
  private mapUrl = 'http://localhost/road-tycoon/src/api/map.php';  // URL to web api

  constructor(private http: Http) { }

  getMap() {
    return this.http.get(this.mapUrl)
          .toPromise()
          .then(response => {
              return response.json();
          })
          .catch(this.handleError);
  }

  private handleError(error: any) {
    console.error('An error occurred', error);
    return Promise.reject(error.message || error);
  }
}


/*
Copyright 2016 Google Inc. All Rights Reserved.
Use of this source code is governed by an MIT-style license that
can be found in the LICENSE file at http://angular.io/license
*/