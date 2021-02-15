import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SkillsCompetitiveComponent } from './skills-competitive.component';

describe('SkillsCompetitiveComponent', () => {
  let component: SkillsCompetitiveComponent;
  let fixture: ComponentFixture<SkillsCompetitiveComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SkillsCompetitiveComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SkillsCompetitiveComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
