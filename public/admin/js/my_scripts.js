/**
 * Created by vasil on 26.2.2016 г..
 */

//city_autocomplete

$(document).ready(function(){
    $("select").select2({
       // tags: true,
        allowClear:true,
        multiple: false,
        minimumInputLength: 1,
        minimumResultsForSearch: 20,
        language: "bg",
        ajax: {
            url: '/city_autocomplete',
            dataType: "json",
            delay: 250,
            data: function (params) {
                return {
                    term: params.term
                };
            },
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            id:       item.id,
                            oblast:   item.oblast,
                            obshtina: item.obshtina,
                            grad:     item.grad
                        }
                    })
                };
            }
        },

        templateResult: formatRepo, // omitted for brevity, see the source of this page
        templateSelection: formatRepoSelection, // omitted for brevity, see the source of this page
        //dropdownCssClass: "bigdrop",
        escapeMarkup: function (markup) { return markup; } // let our custom formatter work
    });

    function formatRepo(repo)
    {
        if (repo.loading) return repo.text;

        var html  = ""
            html += "<div>"
            html += "<span style='font-weight: bold; font-size: 140%'>" + repo.grad + "</span>" + "<br>"
            html += "общ. "
            html += repo.obshtina
            html += ", обл. "
            html += repo.oblast
            html += "</div>"
        //console.log(html)
        return html;
    }

    function formatRepoSelection(repo)
    {
        var html  = ""
            html += repo.grad
            html += "<span style='font-size:smaller'>" + ' - ' + 'общ. ' + repo.obshtina  + ", обл. " +  repo.oblast + "</span>"
        return html || repo.text
    }
});