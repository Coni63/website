import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SkillsOtherComponent } from './skills-other.component';

describe('SkillsOtherComponent', () => {
  let component: SkillsOtherComponent;
  let fixture: ComponentFixture<SkillsOtherComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SkillsOtherComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SkillsOtherComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
