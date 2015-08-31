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

$backUrl = (!ACTIVE_DEMO) ? 
    $this->doorGets->goBackUrl() : 
    '?controller=module'.$moduleInfos['type'].'&uri='.$this->doorGets->Uri
;

?>
<span class="create" ><a class="doorGets-comebackform" href="[{!$backUrl!}]"><img src="[{!BASE_IMG!}]retour.png" class="Retour-img"> [{!$this->doorGets->__('Retour')!}]</a></span>
<a href="?controller=module[{!$moduleInfos['type']!}]&uri=[{!$moduleInfos['uri']!}]&lg=[{!$lgActuel!}]"><img src="[{!BASE_IMG.'mod_'.$moduleInfos['type'].'.png'!}]" title="[{!$moduleInfos['nom']!}]" class="doorGets-img-ico px25" /> [{!$moduleInfos['nom']!}]</a> 
