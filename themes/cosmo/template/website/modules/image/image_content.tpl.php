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

 
 /*
  * Variables :
  *
        $isContent['id_content'] => $id_content
        $isContent['categorie'] => $categorie
        $isContent['titre' => $titre   
        $isContent['description'] => $description
        $isContent['uri'] => $uri
        $isContent['date_creation'] => $date_creation
        $isContent['article'] => $article

 */
 
?>
<!-- doorGets:start:modules/image/image_content -->
<div class="doorGets-image-content doorGets-module-[{!$Website->getModule()!}]">
    <div class="row">
        <div class="col-md-9">
            [{?($this->userPrivilege['add']):}]
            <div class="btn-group pull-right btn-add-content">
                <a href="[{!$urlAdd!}]" class="btn btn-success btn-large">
                    <b class="glyphicon glyphicon-plus"></b> 
                    <span>[{!$Website->__('Ajouter une image')!}]</span>
                </a>
            </div>
            [?]
            <ol class="breadcrumb">
                
                <li><a href="[{!BASE_URL!}]?[{!$Website->getModule()!}]">[{!$labelModule!}]</a></li>
                <li class="active">[{!$isContent['title']!}]</li>
            </ol>
            [{?(
                ( !$this->modulePrivilege['public_module'] && $this->userPrivilege['show'] )
                || $this->modulePrivilege['public_module']
            ):}]
            <div class="doorGets-listing-contents left">
                [{?(!empty($isContent)):}]
                    [{?($this->userPrivilege['edit'] || $this->userPrivilege['delete'] || $this->userPrivilege['modo'] ):}]
                    <div class="btn-group navbar-right pull-right">
                        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                            <b  class="glyphicon glyphicon-cog"></b> [{!$Website->__('Action')!}]
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            [{?( $this->userPrivilege['edit'] || $this->userPrivilege['modo'] ):}]
                                <li><a href="[{!$urlEdition!}]" class="navbut"><b class="glyphicon glyphicon-pencil"></b> [{!$Website->__('Modifier')!}]</a></li>
                            [?]
                            [{?( $this->userPrivilege['delete'] || $this->userPrivilege['modo'] ):}]
                                <li class="divider"></li>
                                <li><a href="[{!$urlDelete!}]" class="navbut"><b class="glyphicon glyphicon-remove"></b> <span>[{!$Website->__('Supprimer')!}]</span></a></li>                            
                            [?]
                        </ul>
                    </div>
                    [?]
                    <h2>[{!$isContent['title']!}]</h2>
                    <div class="infos-content-title ">
                        <span ><img alt="" src="[{!$_imgTag!}]" class="img-icone"  > [{!$linksToCategories!}]</span>
                    </div>
                    <p class="img-content">
                        [{?(!empty($nexContent)):}]<a href="[{!$nexContent['url']!}]">[?]
                            <img  src="[{!BASE!}]data/[{!$Website->getRealUri($Website->getModule())!}]/real/[{!$isContent['image']!}]"  />
                        [{?(!empty($nexContent)):}]</a>[?]
                    </p>
                    <p>
                        [{!$isContent['article']!}]
                    </p>
                    [{?(!empty($isContent['image_gallery'])):}]
                    <div class="magnificpopup-parent-container">
                        <h3>
                        [{?(count($isContent['image_gallery']) > 1):}]
                            [{!$Website->__('Image associées')!}]
                        [??]
                            [{!$Website->__('Image associée')!}]
                        [?]
                        </h3>
                        [{/($isContent['image_gallery'] as $pathFile):}]
                            <a href="[{!URL.'data/'.$Website->getModule().'/'.$pathFile!}]"><img src="[{!URL.'data/'.$Website->getModule().'/'.$pathFile!}]" alt="[{!URL.'data/'.$Website->getModule().'/'.$pathFile!}]" title="[{!URL.'data/'.$Website->getModule().'/'.$pathFile!}]"></a>
                        [/]
                    </div>
                    [?]
                    [{?($moduleInfo[$Module]['all']['author_badge'] && $isContent['author_badge']):}]
                        [{!$Website->getHtmlBadge($isContent['id_user'])!}]
                    [?]
                    [{?($sharethis):}]
                    <div class="box-sharethis">
                        [{!$Website->getHtmlShareThis();}]
                    </div>
                    [?]
                    [{?($comments):}]
                    <div class="box-comment-listing">
                        [{!$Website->getHtmlModuleComments()!}]
                    </div>
                    <div class="box-comments">
                        [{!$Website->getHtmlComment();}]
                    </div>
                    [?]
                    
                    [{?($facebook):}]
                    <div class="box-facebook">
                        [{!$Website->getHtmlCommentFacebook();}]
                    </div> 
                    [?]
                   
                    [{?($disqus):}]
                    <div class="box-disqus">   
                        [{!$Website->getHtmlCommentDisqus();}]
                    </div>
                    [?]
                    
                    <div class="content-next-previous">
                        <ul class="pager">
                            <li class="previous">
                                [{?(!empty($prevContent)):}]<a href="[{!$prevContent['url']!}]">&larr; [{!$prevContent['label']!}]</a>[?]
                            </li>
                            <li class="next">
                                [{?(!empty($nexContent)):}]<a href="[{!$nexContent['url']!}]">[{!$nexContent['label']!}] &rarr;</a>[?]
                            </li>
                        </ul>
                    </div>
                    
                [?]
            </div>
            [{???(empty($Website->isUser)):}]
                <div class="alert alert-danger">
                    [{!$Website->__('Vous devez vous connecter pour afficher ce contenu')!}] : <a href="[{!$this->loginUrl!}]&back=[{!urlencode($Website->getCurrentUrl())!}]">Se connecter</a> ou <a href="[{!$this->registerUrl!}]&back=[{!urlencode($Website->getCurrentUrl())!}]">S'inscrire</a>
                </div>
            [??]
                <div class="alert alert-danger">
                    [{!$Website->__('Vous ne pouvez pas voir ce contenu')!}]
                </div>
            [?]
        </div>
        <div class="col-md-3">
            [{!$Website->getHtmlModuleSearch($q)!}]
            <div class="panel panel-default">
                <div class="panel-heading">
                  <a href="[{!BASE_URL.'?'.$Website->getModule()!}]"><h3 class="panel-title">[{!$Website->__('Catégories')!}]</h3></a>
                </div>
                <div class="panel-body">
                  [{!$Website->getHtmlModuleCategories()!}]
                </div>
            </div>
        </div>
    </div>
</div>
<!-- doorGets:end:modules/image/image_content -->
