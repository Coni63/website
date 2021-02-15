import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SkillsLanguagesComponent } from './skills-languages.component';

describe('SkillsLanguagesComponent', () => {
  let component: SkillsLanguagesComponent;
  let fixture: ComponentFixture<SkillsLanguagesComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SkillsLanguagesComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SkillsLanguagesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
