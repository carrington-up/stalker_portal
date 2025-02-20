<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/TvChannels/tv_genres/tv_genres.js.twig */
class __TwigTemplate_1f69e77b027ff80f95029737a878e1a3c2271fb7316bcae7348b3f6f641c46ab extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
var conf = {
    form: '#modalbox form',
    lang : '";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "js_validator_language", []), "html", null, true);
        echo "',
    showHelpOnFocus : true,
    validateHiddenInputs: true,
    scrollToTopOnError: false,
    ignore: [],
    modules: 'security',

    onkeyup: false,
    errorClass: \"error\",

    onError: function () {
        return false;
    }
};


        function TestTable1() {
            \$('#datatable-1').on('xhr.dt', function (e, settings, json) {
                if (typeof (json.data) == 'object') {
                    for (var i in json.data) {
                        var id = json.data[i].id;
                        var censored = json.data[i].censored;
                        json.data[i].operations = \"<div class='col-xs-3 col-sm-8'>\\n\\
                                                        <a href='#' class='dropdown-toggle no_context_menu' data-toggle='dropdown'>\\n\\
                                                            <i class='pull-right fa fa-cog'></i>\\n\\
                                                        </a>\\n\\
                                                        <ul class='dropdown-menu pull-right'>\\n\\
                                                            <li>\\n\\
                                                                <a class='no_context_menu' href='";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-tv-genres' data-genre-censored='\" + censored + \"' data-genresid='\" + id + \"' id='edit_tv_genres_\" + id + \"'>\\n\\
                                                                    <span>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                            <li>\\n\\
                                                                <a class='main_ajax no_context_menu' href='";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/remove-tv-genres' \"
                                                                    + (json.data[i].tv_channel_count!=0?'disabled=\"disabled\"':'') + \" data-genresid='\" + id + \"'>\\n\\
                                                                    <span>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Delete"), "html", null, true);
        echo "</span>\\n\\
                                                                </a>\\n\\
                                                            </li>\\n\\
                                                        </ul>\\n\\
                                                    </div>\";
                        var title = json.data[i].title;

                        //json.data[i].censored = censored ? \"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Yes"), "html", null, true);
        echo "\": \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("No"), "html", null, true);
        echo "\";
                        json.data[i].censored = censored ? '<i class=\"fa fa-lg fa-lock\"></i>': '<i class=\"fa fa-lg fa-unlock\"></i>';

                        json.data[i].title = \"<a class='no_context_menu'  href='";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/edit-tv-genres' data-genre-censored='\" + censored + \"' data-genresid='\" + id + \"' id='edit_tv_genres_\" + id + \"' >\" + title + \"</a>\";
                    }
                }
            }).dataTable({
                \"processing\": true,
                \"serverSide\": true,
                \"ajax\": {
                    \"url\": \"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/tv-genres-list-json\"
                },
                \"language\": {
                    \"url\": \"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "datatable_lang_file", []), "html", null, true);
        echo "\"
                },
                ";
        // line 61
        if ($this->getAttribute(($context["app"] ?? null), "dropdownAttribute", [], "any", true, true)) {
            // line 62
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["main_macro"] ?? $this->getContext($context, "main_macro")), "get_datatable_column", [0 => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "dropdownAttribute", [], "array")], "method"), "html", null, true);
            echo "
                ";
        }
        // line 64
        echo "                \"lengthMenu\": [-1],
                \"bFilter\": true,
                \"bPaginate\": false,
                \"bInfo\": true,
                \"ordering\": false,
                rowReorder: true, // don't use {selector: 'tr'} or you couldn't access action menu
                \"aoColumnDefs\": [
                    { orderable: true, className: 'row-reorder w-15p', targets: 0 },
                    { \"sortable\": false, \"targets\": [-1, -2, -3, -4]},
                    { \"searchable\": false, \"targets\": [-1, -2, -3, -4]},
                    //{ className: \"dt-left\", \"targets\": [ -1 ] },
                    //{ className: \"dt-right\", \"targets\": [ 2 ] },
                    { className: \"w-15p\", \"targets\": [ 1, 2 ] },
                    { className: \"dt-center w-15p tv-lock\", \"targets\": [ 3 ] },
                    { className: \"dt-center w-20p\", \"targets\": [ 4 ] },
                    { className: \"action-menu w-50p\", \"targets\": [ -1 ]}
                ]
            })
            /*.rowReordering({  // replaced with table.on( 'row-reorder', function ( e, diff, edit ) {...})
                iIndexColumn: 0,
                sURL: \"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/tv-genres-reorder\"
            })*/
            .closest('#iptv_list').find('.dataTables_processing').hide( 10, function(){
                \$('.dataTables_filter').addClass('invisible');
            });
            /*\$('#datatable-1').DataTable().ajax.reload();*/
        }

        function yelp() {

            \$(document).ready(function () {

                LoadDataTablesScripts(TestTable1);

                var table = \$('#datatable-1').DataTable( );
                table.on( 'row-reorder', function ( e, diff, edit ) {
                    /**
                    diff - Array of TR dom elements between start position and droped position
                    edit.triggerRow - points to the dragable row (triggerRow)
                    */
                    //var result = 'Reorder started on row: '+edit.triggerRow.data()+'<br>';
                    //console.log( edit.triggerRow.data().number );
                    //console.log( diff[i] );

                    if( diff.length < 2 ){
                        // shutdown table.redraw() for this situation
                        if( table.RowReorder )
                            table.RowReorder.c.update = false;
                        return false;
                    }

                    var bubbleUp = ( diff[0].oldPosition == edit.triggerRow[0][\"0\"] ) ? true : false;

                    var sendData = {
                        id: edit.triggerRow.data().RowOrder,
                        // defined in experimental way:
                        toPosition:    bubbleUp ? table.row( diff[1].node ).data().number : table.row( diff[diff.length-2].node ).data().number,
                        fromPosition:  edit.triggerRow.data().number
                    };

                    //console.log(sendData);
                    //table.RowReorder.c.update = true;
                    ajaxPostSend( '";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/tv-genres-reorder', sendData );

                    //notty('<span>Done!</span>', 'success');

                } );

                /*
                \$(document).on('change', '#tv_genre_title', function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var _this = \$(this);

                    //_this.next('div').removeClass('bg-danger').css('visibility', 'hidden').html('&nbsp;');
                    _this.next('div.name-check').html('').hide();
                    \$('#modalbox button[type=\"submit\"]').removeAttr(\"disabled\");

                    if ( \$('#form').isValid({}, conf, true) && _this.val().replace(/\\s/ig, '').length) {
                        ajaxPostSend('";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-tv-genres-name', {title: _this.val()})
                    }

                    return false;
                });*/

                // disable red warning popup msg
                \$(document).off('click', \"a[disabled]:not(.paginate_button), a.disabled:not(.paginate_button)\");
                \$(document).on('click', \"a.main_ajax\", function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    var \$this = \$(this);
                    if (\$this.attr(\"disabled\")!== undefined ) {
                        JSErrorModalBox({msg: \"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Action is not available"), "html", null, true);
        echo "! \" + (\$this.attr('warning_msg') ? \$this.attr('warning_msg') : '')});
                        return false;
                    }
                    ajaxPostSend(\$this.attr('href'), \$this.data(), false);
                    \$this.closest('div.open').removeClass('open');
                    return false;
                });

                \$(document).on('click', '#add_tv_genres, a[id^=\"edit_tv_genres_\"]', function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    openModalBox(\$(this));
                    return false
                });

                \$(document).on('click submit', \"#modalbox button[type='submit'], #modalbox form\", function (e) {
                    if (e.currentTarget != e.target) {
                        return;
                    }
                    e.stopPropagation();
                    e.preventDefault();
                    
                    if (\$(\"#modalbox form\").isValid({}, conf, true)) {
                        var sendData = {
                            id: \$(\"#modalbox input[type='hidden']\").val(),
                            title: \$(\"#modalbox input[type='text']\").val(),
                            censored: \$(\"#modalbox input[name='censored']\").prop('checked') ? 1: 0
                        };
                        ajaxPostSend(\$(\"#modalbox form\").attr('action'), sendData, false);
                        JScloseModalBox();
                        return false;
                    }
                });


            });
        }

        document.addEventListener(\"DOMContentLoaded\", yelp, false);

    function closeModalBox(){
        \$(\"#modalbox\").hide();
        \$('#modalbox').find('.modal-header-name span').empty();
        \$('#modalbox').find('.devoops-modal-inner').empty();
    }
    
    function openModalBox(obj){
        \$('#modalbox').find('.modal-header-name span').text((obj.data('genresid')? '";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Edit"), "html", null, true);
        echo "': '";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Add"), "html", null, true);
        echo "') + ' ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("genre"), "html", null, true);
        echo "');
        if (\$('#modalbox').find('.devoops-modal-inner').find('input').length == 0) {
            \$('#modalbox').find('.devoops-modal-inner').html('\\n\\
                <form class=\"form-horizontal\" role=\"form\">\\n\\
                    <div class=\"box-content\">\\n\\
                        <div class=\"form-group\">\\n\\
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Genre"), "html", null, true);
        echo "<span class=\"icon-required\">*</span></label>\\n\\
                            <div class=\"col-xs-10 col-sm-8\">\\n\\
                                <span class=\"col-xs-8 col-sm-8\">\\n\\
                                    <input id=\"tv_genre_id\" type=\"hidden\" name=\"id\">\\n\\
                                    <input id=\"tv_genre_title\" class=\"own_fields form-control\" type=\"text\" name=\"title\" \\n\\
                                        data-validation = \"required, server\" \\n\\
                                        data-validation-url = \"";
        // line 215
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request_context", []), "baseUrl", []), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "controller_alias", []), "html", null, true);
        echo "/check-tv-genres-name\" >\\n\\
                                    <div class=\"name-check\"></div>\\n\\
                                </span>\\n\\
                            </div>\\n\\
                        </div>\\n\\
                        <div class=\"form-group\">\\n\\
                            <label class=\"col-sm-3 control-label col-sm-offset-1\">";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Age restriction"), "html", null, true);
        echo "</label>\\n\\
                            <div class=\"col-xs-10 col-sm-8\">\\n\\
                                <span class=\"col-xs-8 col-sm-8\">\\n\\
                                    <div class=\"checkbox\">\\n\\
                                        <label>\\n\\
                                            <input id=\"tv_genres_censored\" class=\"own_fields form-control\" type=\"checkbox\" name=\"censored\" value=\"1\" >\\n\\
                                            <i class=\"fa fa-square-o small\"></i>\\n\\
                                        </label>\\n\\
                                    </div>\\n\\
                                    <div class=\"bg-danger\"></div>\\n\\
                                </span>\\n\\
                            </div>\\n\\
                        </div>\\n\\
                    </div>\\n\\
                </form>');
            \$('#modalbox').find('.devoops-modal-bottom').html('\\
                <div class=\"col-xs-12\">\\n\\
                    <button type=\"submit\" class=\"btn btn-success col-sm-2 pull-right\">";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Save"), "html", null, true);
        echo "</button>\\n\\
                    <button type=\"reset\"  class=\"btn btn-default col-sm-2 pull-right\">";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Lib\EmptyTranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</button>\\n\\
                </div>');
        } else {
            \$('#modalbox form').get(0).reset();
        }
        
        if (obj.data('genresid')) {
            \$('#modalbox').find('.devoops-modal-inner').find('input[type=\"hidden\"]').val(obj.data('genresid'));
            \$('#modalbox').find('.devoops-modal-inner').find('input[type=\"text\"]').val(obj.closest('tr').find('a:first').text());
            \$('#modalbox').find('.devoops-modal-inner').find('input[name=\"censored\"]').prop('checked', obj.data('genre-censored') && ('' + obj.data('genre-censored')) == '1');
        } else {
            \$('#modalbox').find('.devoops-modal-inner').find('input[type=\"hidden\"]').val('');
            \$('#modalbox').find('.devoops-modal-inner').find('input[type=\"text\"]').val('');
            \$('#modalbox').find('.devoops-modal-inner').find('input[name=\"censored\"]').prop('checked', false);
        }

        // set up validator for the form
        if (obj.data('genresid')) {
            clearServerValidator();
            setEditValidationConfig(conf);
            \$(\"#tv_genre_title\").removeAttr('data-validation-event');
            \$.validate(conf);
            setServerValidationRequestParams();
        } else {
            clearServerValidator();
            setDefaultValidationConfig(conf);
            \$(\"#tv_genre_title\").removeAttr('data-validation-event');
            \$.validate(conf);
            setServerValidationRequestParams();
        }

        \$('#modalbox button[type=\"submit\"]').removeAttr(\"disabled\");
        //\$('#tv_genre_title').next('div.name-check').html('').hide();
        //\$('#tv_genre_title').next('div').removeClass('bg-danger').css('visibility', 'hidden').html('&nbsp;');
        \$('#modalbox form').attr('action', obj.attr('href'));
        \$(\"#modalbox\").show();
        obj.closest('div.open').removeClass('open');
    }



function setServerValidationRequestParams() {
    var param = {
        'id': \$(\"#tv_genre_id\").val(),
        'for_validator': true,
    };
    \$('#tv_genre_title').attr('data-validation-req-params', JSON.stringify(param) );
}

// drop assigned server-side validator instance to stop reuse:
function clearServerValidator() {
    \$(\"#modalbox\").find(\"[data-validation~='server']\").each( function(){
        this.asyncValidators = null;
    });
}

function setDefaultValidationConfig(conf) {
    conf.ignore = [];
    conf.validateOnBlur = true;
    conf.validateOnEvent = false;
    
    \$(document).off('change', '#tv_genre_title');
}

function setEditValidationConfig(conf) {
    conf.ignore = ['title'];
    conf.validateOnBlur = false;
    conf.validateOnEvent = true;

    \$(document).one('change', '#tv_genre_title', function (e) {
        var ignore = conf.ignore;
        var index = ignore.indexOf(this.name);
        if( index !== -1 ){
            \$(this).attr('data-validation-event', \"blur\");
            ignore.splice( index, 1 );
            \$.validate(conf);
        }
    });
}
";
    }

    public function getTemplateName()
    {
        return "default/TvChannels/tv_genres/tv_genres.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 239,  349 => 238,  329 => 221,  318 => 215,  309 => 209,  296 => 203,  246 => 156,  228 => 143,  206 => 126,  159 => 84,  137 => 64,  131 => 62,  129 => 61,  124 => 59,  116 => 56,  104 => 49,  96 => 46,  86 => 39,  79 => 37,  72 => 33,  66 => 32,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/TvChannels/tv_genres/tv_genres.js.twig", "/var/www/html/stalker_portal/admin/resources/views/default/TvChannels/tv_genres/tv_genres.js.twig");
    }
}
