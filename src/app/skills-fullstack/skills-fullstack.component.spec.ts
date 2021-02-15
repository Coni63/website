import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SkillsFullstackComponent } from './skills-fullstack.component';

describe('SkillsFullstackComponent', () => {
  let component: SkillsFullstackComponent;
  let fixture: ComponentFixture<SkillsFullstackComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SkillsFullstackComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SkillsFullstackComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
