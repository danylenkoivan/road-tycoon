import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';
import { enableProdMode } from '@angular/core';
import { environment } from './environments/environment';
import { MapModule } from './map/map.module';

if (environment.production) {
  enableProdMode();
}

platformBrowserDynamic().bootstrapModule(MapModule);
