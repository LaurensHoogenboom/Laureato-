//add portfolio item

// $("#portfolioAdd").submit(function(e) {
//     e.preventDefault();

//     var form = $(this);

//     console.log('fire');

//     $.ajax({
//         type: "POST",
//         url: '/src/php/portfolio.php',
//         data: form.serialize(),
//         success: function(response) {
//             console.log(response);
//         }
//     });
// });

//filter portfolio items

$(document).ready(function() {
    $(document).on('change', "#portfolioFilterForm input, #portfolioFilterForm select, #portfolioSizeForm select", function() {
        filterPortfolio();
    });

    $(document).on('submit', "#portfolioFilterForm", function(e) {
        e.preventDefault();

        filterPortfolio();
    });

    $(document).on('click', '#nextPortfolioPageButton', function() {
        var newIndex = parseInt(sessionStorage.getItem('currentPage')) + 1;

        filterPortfolio(newIndex);
    });

    $(document).on('click', '#previousPortfolioPageButton', function() {
        var newIndex = parseInt(sessionStorage.getItem('currentPage')) - 1;

        filterPortfolio(newIndex);
    });
})

function filterPortfolio(pageIndex) {
    page = 0;

    if (pageIndex != null) {
        page = pageIndex;
    }

    var categoryValue = $('#portfolioCategoryInput').val();
    var sortValue = $("#portfolioSortInput").val();
    var searchValue = $("#portfolioSearchInput").val();
    var pageSize = $("#portfolioSizeForm select").val();

    getPortfolioItems(pageSize, page, sortValue, categoryValue, searchValue);
}

$(document).ready(function(){
    $(document).on('click', "#removePortfolioFilters", function() {
        $("#portfolioSizeForm select").val(8);
        $("#portfolioSearchInput").val("");
        $('#portfolioCategoryInput').val("default");
        $("#portfolioSortInput").val("default");

        $("select").change();

        getPortfolioItems(8, 0, null, null, null, null, null);
    });
})

//portfolio outside search

$(document).ready(function() {
    $(document).on('submit', '#alienPortfolioSearchForm', function(e) {
        e.preventDefault();

        console.log('fire');

        var alienSearch = $('#alienPortfolioSearchInput').val();

        sessionStorage.setItem('alienSearch', alienSearch);

        window.location.href = "/portfolio/";
    })
})

//contact form

$(document).ready(function() {
    $(document).on('submit', '#contactForm', function(e) {
        e.preventDefault();

        Notify("Processing...");

        $.ajax({
            type: 'post',
            url: '/src/php/contactMail.php',
            data: $('#contactForm').serialize(),
            success: function(response) {
                if ($.trim(response) == "succes") {
                    NotifySucces("Your message has been sent succesfully.");
                } else {
                    NotifyFail("Something went wrong. Please try again.");
                }
            },
            error: function() {
                NotifyFail("Something went wrong. Please try again.");
            }
        });

        function Notify(message) {
            $('#contactFormStatus').removeClass('succes');
            $('#contactFormStatus').removeClass('fail');
            $('#contactFormStatus').removeClass('hidden');
            $('#contactFormStatus').text(message);
        }

        function NotifyFail(error) {
            $('#contactFormStatus').addClass('fail');
            $('#contactFormStatus').removeClass('succes');
            $('#contactFormStatus').removeClass('hidden');
            $('#contactFormStatus').text(error);
        }

        function NotifySucces(succes) {
            $('#contactFormStatus').addClass('succes');
            $('#contactFormStatus').removeClass('fail');
            $('#contactFormStatus').removeClass('hidden');
            $('#contactFormStatus').text(succes);
        }
    });
});


