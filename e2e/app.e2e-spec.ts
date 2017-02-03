import { RoadTycoonPage } from './app.po';

describe('road-tycoon App', function() {
  let page: RoadTycoonPage;

  beforeEach(() => {
    page = new RoadTycoonPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
