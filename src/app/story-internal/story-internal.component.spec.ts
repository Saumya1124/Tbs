import { ComponentFixture, TestBed } from '@angular/core/testing';

import { StoryInternalComponent } from './story-internal.component';

describe('StoryInternalComponent', () => {
  let component: StoryInternalComponent;
  let fixture: ComponentFixture<StoryInternalComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ StoryInternalComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(StoryInternalComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
