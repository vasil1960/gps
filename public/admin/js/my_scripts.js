/**
 * Created by vasil on 26.2.2016 г..
 */

//city_autocomplete

$(document).ready(function(){
    $("select1").select2({
       // tags: true,
        allowClear:true,
        multiple: false,
        minimumInputLength: 1,
        placeholder: "Избери населено място ...",
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
                            text:     item.grad,
                            oblast:   item.oblast,
                            obshtina: item.obshtina
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
        if (!repo.id) return repo.text;

        var html  = ""
            html += "<div>"
            html += "<span style='font-weight: bold; font-size: 120%; color: #1f3e88'>" + repo.text+ "</span>" + "<br>"
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
            html += repo.text
            //html += "<span style='font-size:smaller'>" + ' - ' + 'общ. ' + repo.obshtina  + ", обл. " +  repo.oblast + "</span>"
        return html || repo.text
    }

    $('#tblNames').DataTable({
        select:true
    });

    $('#tblSignali').DataTable({
        select:true
    });

});