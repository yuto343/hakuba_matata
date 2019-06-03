<section class="sidebar">
    <div class="category">
        <div class="section_title">
            <P>Category</P>
        </div>
        <?php 
        $args = array(
            'orderby' => 'count'
        );
        $categories = get_categories($args);
        foreach($categories as $category){
            $cat_link = get_category_link($category->cat_ID);
            echo'<a href="'.$cat_link.'">'.'<div class="category_btn"> <p>'.$category->name.'</p> </div> </a>';
        }
        ?>
        <!-- <a href="">
            <div class="category_btn">
            <p>Gadget</p>
            </div>
        </a>
        <a href="">
            <div class="category_btn">
            <p>Life</p>
            </div>
        </a>
        <a href="">
            <div class="category_btn">
            <p>Programing</p>
            </div>
        </a>
        <a href="">
            <div class="category_btn">
            <p>Design</p>
            </div>
        </a> -->
    </div>
</section>