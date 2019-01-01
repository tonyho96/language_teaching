@extends('layouts.frontend')
@section('content')
    
<div class="discussions-page" >
    <div class="container notebook">
        <h1 class="community-head-title">Discussions</h1>
        <p>
            Have an interesting topic you want to talk about? Start a discussion and connect with language learners from around the globe here.
        </p>

        <div class="notebook row">
            <div class="col-md-9">
                <div class="panel no-margin-b no-border-b no-border-radius">
            
                    <ul class="content-block-tabs js-tabs-tabs no-margin-b" style="display: inline-block;width: 100%;border-bottom: 1px solid #e8e8e8;">
                        <li class="content-block-tab">
                            <a id="browse-by-language" onclick="onSelectDiscussionsMenu('browse-by-language')" class="content-block-tab-link js-tab-link selected" href="#">Browse by language</a>
                        </li>
                        <li class="content-block-tab">
                            <a id="my-discussions" onclick="onSelectDiscussionsMenu('my-discussions')" class="content-block-tab-link js-tab-link" href="#">My discussions</a>
                        </li>
                        <li class="content-block-tab">
                            <a id="my-commented" onclick="onSelectDiscussionsMenu('my-commented')" class="content-block-tab-link js-tab-link" href="#">My commented discussions</a>
                        </li>
                    </ul>
                    <div class="panel-body">
                            <div class="panel-discussion-heading">
                                <div id="filter-language">
                                    <div class="party-size-picker lg dtp-picker-selector select-native dtp-picker-selector-mobile two" style="width: 50%">
                                        <div class="ui-select-container ui-select-bootstrap dropdown" theme="bootstrap" >
                                            <div class="browse-by-language-select" placeholder="Learning">
                                                <select class="form-control ">
                                                    <option value="0" selected="selected" label="Any language">Learning Any language</option>
                                                    <option value="1" label="English">English</option>
                                                    <option value="2" label="Chinese (Mandarin)">Chinese (Mandarin)</option>
                                                    <option value="3" label="French">French</option>
                                                </select>
                                                <i class="fa fa-angle-down pull-right select-language-icon "></i>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="party-size-picker lg dtp-picker-selector select-native dtp-picker-selector-mobile two" style="width: 50%">
                                        <div class="ui-select-container ui-select-bootstrap dropdown" theme="bootstrap">
                                            <div class="browse-by-language-select">
                                                 <select class="form-control">
                                                    <option value="?" selected="selected" label="Author's Native Language"></option>
                                                    <option value="0" label="Any language">Any language</option>
                                                    <option value="1" label="English">English</option>
                                                    <option value="2" label="Chinese (Mandarin)">Chinese (Mandarin)</option>
                                                </select>
                                                 <i class="fa fa-angle-down pull-right select-language-icon "></i>
                                            </div>
                                        </div>
                                    </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>

                        <div class="teacher-list panel loading-layout no-border-t">
                            <div class=""></div>
                            <div class="noresult-text text-lg text-center text-muted ng-hide">
                                <img class="rounded" src="/front/images/contacts/icon_norecord.png"><br>
                                <span>Nothing found.</span>
                            </div>


                        <div id="browse-by-language-div" class="article-item yes-cursor cursor-over animation-list-item">
                            <div class="panel-body" href="#">
                                <div class="item-icon" style="cursor: auto; position: relative;">
                                    <a href="#" class="">
                                        <img class="rounded" width="50" src="/front/images/lessons/student_icon.png">
                                    </a>
                                </div>
                                <div class="item-info">
                                    <strong class="text-bg">
                                        <a class="search-title" href="#">
                                            me gustaría aprender inglés mi idioma natal es español y quiero intercambiar idiomas
                                        </a>
                                    </strong>
                                    <p class="truncate">Me gustaría aprender mi idioma natal es Español y quiero intercambiar idiomas</p>
                                        <ul class="list-inline no-margin-b text-light-gray">
                                            <li>
                                                <span class="label">1</span>
                                            </li>
                                            <li>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <a href="#">Criselio Diaz</a>
                                            </li>
                                            <li>
                                                <span>Last updated <span>2 hours  ago</span></span>
                                            </li>
                                            <li>
                                                <span>0 comment(s)</span>
                                            </li>
                                            <li><span>8 view(s)</span>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                             <div class="panel-body" href="#">
                                <div class="item-icon" style="cursor: auto; position: relative;">
                                    <a href="#" class="">
                                        <img class="rounded" width="50" src="/front/images/lessons/student_icon.png">
                                    </a>
                                </div>
                                <div class="item-info">
                                    <strong class="text-bg">
                                        <a class="search-title" href="#">
                                            me gustaría aprender inglés mi idioma natal es español y quiero intercambiar idiomas
                                        </a>
                                    </strong>
                                    <p class="truncate">Me gustaría aprender mi idioma natal es Español y quiero intercambiar idiomas</p>
                                        <ul class="list-inline no-margin-b text-light-gray">
                                            <li>
                                                <span class="label">1</span>
                                            </li>
                                            <li>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <a href="#">Criselio Diaz</a>
                                            </li>
                                            <li>
                                                <span>Last updated <span>2 hours  ago</span></span>
                                            </li>
                                            <li>
                                                <span>0 comment(s)</span>
                                            </li>
                                            <li><span>8 view(s)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <div class="panel-body" href="#">
                                <div class="item-icon" style="cursor: auto; position: relative;">
                                    <a href="#" class="">
                                        <img class="rounded" width="50" src="/front/images/lessons/student_icon.png">
                                    </a>
                                </div>
                                <div class="item-info">
                                    <strong class="text-bg">
                                        <a class="search-title" href="#">
                                            me gustaría aprender inglés mi idioma natal es español y quiero intercambiar idiomas
                                        </a>
                                    </strong>
                                    <p class="truncate">Me gustaría aprender mi idioma natal es Español y quiero intercambiar idiomas</p>
                                        <ul class="list-inline no-margin-b text-light-gray">
                                            <li>
                                                <span class="label">1</span>
                                            </li>
                                            <li>
                                                <a href="#">English</a>
                                            </li>
                                            <li>
                                                <a href="#">Criselio Diaz</a>
                                            </li>
                                            <li>
                                                <span>Last updated <span>2 hours  ago</span></span>
                                            </li>
                                            <li>
                                                <span>0 comment(s)</span>
                                            </li>
                                            <li><span>8 view(s)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body" href="#">
                                    <div class="item-icon" style="cursor: auto; position: relative;">
                                        <a href="#" class="">
                                            <img class="rounded" width="50" src="/front/images/lessons/student_icon.png">
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <strong class="text-bg">
                                            <a class="search-title" href="#">
                                                me gustaría aprender inglés mi idioma natal es español y quiero intercambiar idiomas
                                            </a>
                                        </strong>
                                        <p class="truncate">Me gustaría aprender mi idioma natal es Español y quiero intercambiar idiomas</p>
                                            <ul class="list-inline no-margin-b text-light-gray">
                                                <li>
                                                    <span class="label">1</span>
                                                </li>
                                                <li>
                                                    <a href="#">English</a>
                                                </li>
                                                <li>
                                                    <a href="#">Criselio Diaz</a>
                                                </li>
                                                <li>
                                                    <span>Last updated <span>2 hours  ago</span></span>
                                                </li>
                                                <li>
                                                    <span>0 comment(s)</span>
                                                </li>
                                                <li><span>8 view(s)</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <!-- second tab -->
                            <div id="my-discussions-div" class="panel-body" style="display: none;">
                                <div class="noresult-text text-lg text-center text-muted" style="">
                                    <img class="rounded" src="/front/images/contacts/icon_norecord.png"><br>
                                        <span>Nothing found.</span>
                                </div>
                            </div>

                            <!-- third tab -->
                            <div id="my-commented-div" class="panel-body" style="display: none;">
                                <div class="noresult-text text-lg text-center text-muted" style="">
                                    <img class="rounded" src="/front/images/contacts/icon_norecord.png"><br>
                                        <span>Nothing found.</span>
                                </div>
                            </div>
                        </div>


                        <aside class="text-center grid-gutter-margin-b" style="">
                            <button class="btn btn-labeled btn-block btn-show-more no-border-radius">
                                <span class="btn-txt">Show More</span>
                                <span class="loader">
                                    <span class="loader_"></span>
                                </span>
                            </button>
                        </aside>
                                <div class="panel no-border panel-dark no-border-radius visible-sm">
                                    <div class="panel-body" style="padding:0">
                                        <div>
                                            <a href="https://www.italki.com/languagechallenge?internal_source=internal&amp;internal_medium=internalad&amp;internal_campaign=023_b_en_ns_ns_u_btm_s1&amp;internal_ref=language_challenge">
                                                <img src="https://imagesarticles-static01.italki.com/default5501_0.jpg" width="100%" height="auto"></a>
                                        </div>
                                    <div>
                                            
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-3">
                            <div class="panel no-border panel-dark no-border-radius">
                                <div class="panel-body no-border-radius">
                                    <div class="text-center">
                                    <button class="btn btn-start-new-discussion no-border-radius" style="width: 100%;">
                                        <span class="btn-txt">Start a new discussion</span>
                                    </button>
                                </div>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection