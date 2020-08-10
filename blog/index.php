<?php 
    $pgKeywords="My Work Blog Stories UI UX Design Classic Art";
    $pgDesc="Stories about what I do: everything related to UX and/or UI design, webdevelopment and classic art.";
    $pgName="Portfolio";

    include $_SERVER['DOCUMENT_ROOT'] . "/src/php/header.php"; 
?>

<section class="smallMargin left background pageTitle" style="background-image: url(/blog/img/header.jpg);">
    <div class="overlay">
        <article>
            <h1>
                Blog
            </h1>
            <h3>
                Stories about the things I do.
            </h3>
        </article>
        <div class="content contentFilterWrapper">
            <div class="contentFilter">
                <form>
                    <div class="buttonTextInput search">
                        <input type="text" placeholder="Search" id="blogSearchInput">
                        <label class="icon">
                            &#xe901;
                        </label>
                    </div>
                    <select id="blogCategoryInput">
                        <option value="default">Category</option>
                    </select>
                    <select id="blogSortInput">
                        <option value="default">Sort</option>
                        <option value="submitDate">Date</option>
                        <option value="type">Category</option>
                    </select>
                    <a class="button transparent blue removeFilterButton hidden" id="removeblogFilters">Reset</a>
                    <label class="button blue mobileCloseFilterButton" id="closeBlogFilterMenu">
                        <span class="text">
                            View items
                        </span>
                    </label>
                </form>
            </div>

            <label class="button blue mobileFilterButton">
                <span class="text">
                    Filters
                </span>
            </label>
        </div>
    </div>
</section>

<section class="contentList">
    <div class="overlay">
        <div class="itemList blogList" id="blogList">
            <div class="item blogItem featured">
                <article>
                    <h1>
                        Daar gaan we! - Noorwegen
                    </h1>
                    <p>
                        10 augustus 2020
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Maecenas pharetra odio mi, ut dictum arcu ornare ut.
                        Duis vel nulla in erat commodo viverra in id quam.
                        In condimentum diam at pulvinar elementum...
                    </p>
                    <a class="button blue" href="#">
                        Lezen
                    </a>
                </article>
                <div class="tumbnail" style="background-image: url('/blog/placeholder.jpg');"></div>
            </div>

            <div class="item blogItem">
                <label>
                    <b>
                        Possible Content Blog Test
                    </b>
                </label>
                <label>
                    Testcategory
                </label>
                <label>
                    Concept
                </label>
                <label>
                    8-7-2020 | 7:47
                </label>
            </div>

            <script>
                $.import_js('/src/js/blog.js')
                $.import_js('/src/js/dal/blog.js')

                getBlogItems();
            </script>
        </div>

        <div class="itemPaging">
            <div class="pageNumber">
                <label class="button grey round" id="previous">
                    <div class="chevron left">
                        <span></span>
                        <span></span>
                    </div>
                </label>
                <label class="button blue square" id="current">
                    1
                </label>
                <label class="button grey round" id="next">
                    <div class="chevron right">
                        <span></span>
                        <span></span>
                    </div>
                </label>
            </div>

            <div></div>

            <div class="pageSize">
                <label>
                    Items per page:
                </label>

                <form id="blogSizeForm">
                    <select>
                        <option value="8">
                            8
                        </option>

                        <option value="12">
                            12
                        </option>

                        <option value="16">
                            16
                        </option>
                    </select>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="left">
    <div class="overlay">
        <article>
            <h1>
                Do you want to know more about me or what I do?
            </h1>
            <p>
                Have a look at my about page. If you still have questions
                you can contact me using the information below.
            </p>
            <ul>
                <li>
                    info@laureato.nl
                </li>
                <li>
                    (+31) 6 22 85 48 00
                </li>
            </ul>
        </article>
        <div class="content center">
            <div class="iconSet">
                <label>
                    <span class="icon">
                        &#xe902;
                    </span>
                    <h2>
                        Web
                    </h2>
                </label>
                <label>
                    <span class="icon">
                        &#xe903;
                    </span>
                    <h2>
                        Classic Art
                    </h2>
                </label>
                <label>
                    <span class="icon">
                        &#xe904;
                    </span>
                    <h2>
                        UI/UX
                    </h2>
                </label>
            </div>
        </div>
    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/src/php/footer.php"; ?>