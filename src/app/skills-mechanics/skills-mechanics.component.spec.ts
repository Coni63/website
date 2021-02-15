import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SkillsMechanicsComponent } from './skills-mechanics.component';

describe('SkillsMechanicsComponent', () => {
  let component: SkillsMechanicsComponent;
  let fixture: ComponentFixture<SkillsMechanicsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SkillsMechanicsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SkillsMechanicsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
