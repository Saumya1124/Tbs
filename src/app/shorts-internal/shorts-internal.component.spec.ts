import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ShortsInternalComponent } from './shorts-internal.component';

describe('ShortsInternalComponent', () => {
  let component: ShortsInternalComponent;
  let fixture: ComponentFixture<ShortsInternalComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ShortsInternalComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ShortsInternalComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
