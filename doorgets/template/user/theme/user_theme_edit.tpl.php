<?php if (!defined(DOORGETS)) { header('Location:../'); exit(); }

/*******************************************************************************
/*******************************************************************************
    doorGets 7.0 - 31, August 2015
    doorGets it's free PHP Open Source CMS PHP & MySQL
    Copyright (C) 2012 - 2015 By Mounir R'Quiba -> Crazy PHP Lover
    
/*******************************************************************************

    Website : http://www.doorgets.com
    Contact : http://www.doorgets.com/t/en/?contact
    
/*******************************************************************************
    -= One life, One code =-
/*******************************************************************************
    
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
    
******************************************************************************
******************************************************************************/


?>
<div class="doorGets-rubrique-center">
    <div class="doorGets-rubrique-center-content">
        <div class="doorGets-rubrique-left-center-title page-header">
        </div>

        <legend>
            <span class="create" ><a class="doorGets-comebackform" href="?controller=theme"><img src="[{!BASE_IMG!}]retour.png" class="Retour-img"> [{!$this->doorGets->__('Retour')!}]</a></span>
            <b class="glyphicon glyphicon-tint"></b> <a href="?controller=theme">[{!$this->doorGets->__('Thème')!}] </a> / [{!$theme!}] 
            [{?($nameTheme === $theme):}]<div class="right-theme-title "><img src="[{!BASE_IMG.'activer.png'!}]"  /> <small>[{!$this->doorGets->__('Thème par défaut')!}]</small></div>[?]
        </legend>
        <div class="row">
            <div class="col-md-3">
                [{?(array_key_exists('css',$themeListe)):}]
                    <label>CSS</label><br />
                    <select onchange="window.location = $(this).val();">
                        <option value="" ></option>
                        [{/($themeListe['css'] as $dirFile=>$file):}]
                            <option [{?($fileSelected === $dirFile):}]selected="selected"[?]  value="?controller=theme&action=edit&name=[{!$theme!}]&file=[{!$dirFile!}]">[{!$dirFile!}]</option>
                        [/]
                    </select>
                [?]
            </div>
            [{?(!SAAS_ENV || (SAAS_ENV && SAAS_THEME_JS)):}]
            <div class="col-md-3">
                [{?(array_key_exists('js',$themeListe)):}]
                    <label>JavaScript</label><br />
                    <select onchange="window.location = $(this).val();">
                        <option value="" ></option>
                        [{/($themeListe['js'] as $dirFile=>$file):}]
                            <option [{?($fileSelected === $dirFile):}]selected="selected"[?] value="?controller=theme&action=edit&name=[{!$theme!}]&file=[{!$dirFile!}]">[{!$dirFile!}]</option>
                        [/]
                    </select>
                [?]
            </div>
            [?]
            [{?(!SAAS_ENV):}]
            <div class="col-md-3">
                [{?(array_key_exists('tpl',$themeListe)):}]
                    
                    <label>Template</label><br />
                    <select onchange="window.location = $(this).val();">
                        <option value="" ></option>
                        [{/($themeListe['tpl'] as $dirFile=>$file):}]
                            <option [{?($fileSelected === $dirFile):}]selected="selected"[?]  value="?controller=theme&action=edit&name=[{!$theme!}]&file=[{!$dirFile!}]">[{!$dirFile!}]</option>
                        [/]
                    </select>
                [?]
            </div>
            [?]
            <div class="col-md-12">
            <hr />
            </div>
            <div class="col-md-12">
                <div class="u-title"><label>[{!$this->doorGets->__('Fichier')!}] &#187; [{!$fileSelected!}]</label></div>
                [{!$this->doorGets->Form->open('post')!}]
                [{!$this->doorGets->Form->textarea('','content_nofi',$fileContent)!}]
                <div class="separateur-tb"></div>
                <div class="text-center">
                    [{!$this->doorGets->Form->submit($this->doorGets->__("Sauvegarder"))!}]
                </div>
                [{!$this->doorGets->Form->close()!}]
            </div>
        </div>
    </div>
</div>
