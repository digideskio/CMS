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

unset($aActivation[0]);
   
    
?>
<div class="doorGets-rubrique-center">
    <div class="doorGets-rubrique-center-title page-header">
        
    </div>
    <div class="doorGets-rubrique-center-content">
        <legend>
            [{!$htmlAddTop!}]
            : [{!$this->doorGets->__('Partager un lien')!}] 
        </legend>
        
        [{!$formAddTopExtra!}]
        [{!$this->doorGets->Form->input($this->doorGets->__('Lien').' <span class="cp-obli">*</span>','url')!}]
        <div class="separateur-tb"></div>
        [{?(!empty($listeCategories)):}]
            <label>[{!$this->doorGets->__('Catégories')!}] </label>
            <div class="separateur-tb"></div>
            [{/($listeCategories as $uri=>$value):}]
                [{!$this->doorGets->Form->checkbox($value['name'],'categories_'.$value['id'],'1','','cat-edit-level-'.$value['level'])!}]
            [/]
            <div class="separateur-tb"></div>
        [?]
        <div class="separateur-tb"></div>
        [{!$formAddBottomExtra!}]
    </div>
</div>
