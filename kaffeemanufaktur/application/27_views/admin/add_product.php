<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="modal-body">
            <form action="<?php echo base_url().'products/add_product/' ?>" class="database_operations"
                enctype="multipart/form-data" id="product_form" method="post">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="form-group row">
                            <div class="col-sm-3" style="text-align:right">
                                <label>Enter Product Name </label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="name" required="required" class="form-control"
                                    placeholder="Enter Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3" style="text-align:right">
                                <label>Enter Slug Name</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="e_name" required="required" class="form-control"
                                    placeholder="Enter Slug Name (Please don't use spesial characters!)">
                                <p id="error_name" style="color: red'"></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3" style="text-align:right">
                                <label>Select Category</label>
                            </div>
                            <div class="col-sm-9">
                                <select class="form-control category_select" name="category" id="hide_select" required>
                                    <option value="" selected hidden disabled>Select</option>
                                    <?php 
                    foreach($all_category as $cat)
                    {
                      ?><option value="<?= $cat['id']; ?>" data-id="<?= $cat['category']; ?>"><?= $cat['name']; ?>
                                    </option><?php 
                    }
                    ?>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                <div class="col-sm-3" style="text-align:right">
                  <label>Select Sub Category</label>
                </div>
                <div class="col-sm-9">
                  <select class="form-control subcategory_select" name="subcategory" required>
                    <option value="" selected hidden disabled>Select</option>  
                  </select>
                </div>
              </div> -->
                        <div class="form-group row">
                            <div class="col-sm-3" style="text-align:right">
                                <label>Enter Product Description</label>
                            </div>
                            <div class="col-sm-9">
                                <textarea name="description" required="required" class="form-control"
                                    placeholder="Enter Product Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3" style="text-align:right">
                                <label>Enter Product Image</label>
                            </div>
                            <div class="col-sm-9">
                                <div class="input-group" style="display: flex;">
                                    <img id="image" height="100px" style="display:flex;" src="#" />
                                    <input type="file" name="image" required="required"
                                        class="form-control" placeholder="Enter Product Image"
                                        onchange="readURL(this);" style='width: 1%'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3" style="text-align:right">
                                <label>Select Sub Category </label>
                            </div>
                            <div class="col-sm-9">
                                <div class="row  showcategory_select">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row div_hide">
                            <div class="col-sm-3" style="text-align:right">
                                <label>Suitable For</label>
                            </div>
                            <div class="col-sm-9">
                                <div class="row ">
                                    <?php foreach($product_equipment as $cat){ 
                  if($cat['type']=='suitable'){
                  ?>
                                    <div class="col-sm-6">
                                        <input type="checkbox" value="<?=$cat['id']; ?>" id="suitable<?= $cat['id']; ?>"
                                            name="suitable<?= $cat['id']; ?>">
                                        <label for="suitable<?= $cat['id']; ?>"><img style="width: 30px;height: 30px"
                                                title="<?=$cat['name']?>" src="<?= base_url()?><?=$cat['image']?>" />
                                            (<?=$cat['name']?>)</label>
                                    </div>
                                    <?php } } ?>
                                </div>
                            </div>

                        </div>
                        <div class="form-group row div_hide">
                            <div class="col-sm-3 verticle-middle text-right">
                                <label>Country </label>
                            </div>
                            <div class="col-sm-9">
                                <div class="row">
                                    <?php foreach($product_equipment as $cat){
                  if($cat['type']=='country'){
                  ?>
                                    <div class="col-sm-6">
                                        <input type="checkbox" value="<?=$cat['id']; ?>" id="country<?=$cat['id']; ?>"
                                            name="country<?= $cat['id']; ?>">
                                        <label for="country<?= $cat['id']; ?>"><img style="width: 30px;height: 30px"
                                                title="<?=$cat['name']?>" src="<?= base_url()?><?=$cat['image']?>" />
                                            (<?=$cat['name']?>)</label>
                                    </div>
                                    <?php } } ?>
                                </div>
                            </div>

                        </div>
                        <div class="form-group row div_hide">
                            <div class="col-sm-3 verticle-middle text-right">
                                <label>Coffee Drink Type</label>
                            </div>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="checkbox" value="Kraeftig" id="Kraeftig" name="coffee_drink[]">
                                        <label for="Kraeftig">Kräftig</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="checkbox" value="mild" id="mild" name="coffee_drink[]">
                                        <label for="mild">Mild</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row div_hide">
                            <div class="col-sm-3 verticle-middle text-right">
                                <label>Taste In Coffee</label>
                            </div>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="checkbox" value="clasic" id="clasic" name="coffee_taste[]">
                                        <label for="clasic">Meinem altagskaffee</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="checkbox" value="curious" id="curious" name="coffee_taste[]">
                                        <label for="curious">Etwas Speziellem</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="checkbox" value="adventurous" id="adventurous"
                                            name="coffee_taste[]">
                                        <label for="adventurous">Monatlich etwas neuem</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="form-group row div_hide">
                            <div class="col-sm-3 verticle-middle text-right">
                                <label>Product Body</label>
                            </div>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <input type="checkbox" value="glatt" id="glatt" name="body[]>">
                                        <label for="glatt">glatt</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="checkbox" value="rund" id="rund" name="body[]>">
                                        <label for="rund">rund</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="body_rating">
                                            <option value="" disabled="" hidden="" selected="">Value</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="1.5">1.5</option>
                                            <option value="2">2</option>
                                            <option value="2.5">2.5</option>
                                            <option value="3">3</option>
                                            <option value="3.5">3.5</option>
                                            <option value="4">4</option>
                                            <option value="4.5">4.5</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="checkbox" value="voll" id="voll" name="body[]>">
                                        <label for="voll">voll</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="checkbox" value="geschmeidig" id="geschmeidig" name="body[]>">
                                        <label for="geschmeidig">geschmeidig</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="checkbox" value="teeartig" id="teeartig" name="body[]>">
                                        <label for="teeartig">teeartig</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="checkbox" value="intensiv" id="intensiv" name="body[]>">
                                        <label for="intensiv">intensiv</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row div_hide">
                            <div class="col-sm-3 verticle-middle text-right">
                                <label>Product Acid</label>
                            </div>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <input type="checkbox" value="ausgewogen" id="ausgewogen" name="acid[]>">
                                        <label for="ausgewogen">ausgewogen</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="checkbox" value="frisch" id="frisch" name="acid[]>">
                                        <label for="frisch">frisch</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="acid_rating">
                                            <option value="" disabled="" hidden="" selected="">Value</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="1.5">1.5</option>
                                            <option value="2">2</option>
                                            <option value="2.5">2.5</option>
                                            <option value="3">3</option>
                                            <option value="3.5">3.5</option>
                                            <option value="4">4</option>
                                            <option value="4.5">4.5</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="checkbox" value="wild" id="wild" name="acid[]>">
                                        <label for="wild">wild</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="checkbox" value="schwach" id="schwach" name="acid[]>">
                                        <label for="schwach">schwach</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row div_hide">
                            <div class="col-sm-3 verticle-middle text-right">
                                <label>Product Aftertaste</label>
                            </div>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <input type="checkbox" value="soft" id="soft" name="aftertaste[]>">
                                        <label for="soft">Soft</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="checkbox" value="Komplex" id="Komplex" name="aftertaste[]>">
                                        <label for="Komplex">Komplex</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="aftertaste_rating">
                                            <option value="" disabled="" hidden="" selected="">Value</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="1.5">1.5</option>
                                            <option value="2">2</option>
                                            <option value="2.5">2.5</option>
                                            <option value="3">3</option>
                                            <option value="3.5">3.5</option>
                                            <option value="4">4</option>
                                            <option value="4.5">4.5</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="checkbox" value="weich" id="weich" name="aftertaste[]>">
                                        <label for="weich">weich</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="checkbox" value="leicht" id="leicht" name="aftertaste[]>">
                                        <label for="leicht">leicht</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row div_hide">
                            <div class="col-sm-3 verticle-middle text-right">
                                <label>Taste</label>
                            </div>
                            <div class="col-sm-9">
                                <div class="row">
                                    <?php foreach($product_equipment as $cat){
                      if($cat['type']=='taste'){
                    ?>
                                    <div class="col-sm-4">
                                        <input type="checkbox" value="<?= $cat['id']; ?>" id="taste<?= $cat['id']; ?>"
                                            name="taste<?= $cat['id']; ?>">
                                        <label for="taste<?= $cat['id']; ?>"><img style="width: 30px;height: 30px"
                                                title="<?=$cat['name']?>"
                                                src="<?= base_url()?><?=$cat['image']?>" /><?=$cat['name']?></label>
                                    </div>
                                    <?php } } ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-12">
                        <div class="form-group row">
                            <div class="col-sm-2 verticle-middle text-right">
                                <label>Product Detail</label>
                            </div>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="product_details" rows="30"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group row">
                            <div class="col-sm-4" style="text-align:right">
                            </div>
                            <div class="col-sm-8">
                                <button type="button" class="btn btn-primary" id="submit_button">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="https://cdn.tiny.cloud/1/wqlkvo55irsnjvdva6wjjnc1p4du5u5v480rml0njp2airsa/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
<script>
tinymce.init({
    selector: '#product_details',
    plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
    toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
    toolbar_mode: 'floating',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    image_advtab: true,
    link_list: [{
            title: 'My page 1',
            value: 'https://www.tiny.cloud'
        },
        {
            title: 'My page 2',
            value: 'http://www.moxiecode.com'
        }
    ],
    image_list: [{
            title: 'My page 1',
            value: 'https://www.tiny.cloud'
        },
        {
            title: 'My page 2',
            value: 'http://www.moxiecode.com'
        }
    ],
    image_class_list: [{
            title: 'None',
            value: ''
        },
        {
            title: 'Some class',
            value: 'class-name'
        }
    ],
    menu: {
        tc: {
            title: 'TinyComments',
            items: 'addcomment showcomments deleteallconversations'
        }
    },
    menubar: 'file edit view insert format tools table tc help',
    toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media pageembed template link anchor codesample | a11ycheck ltr rtl | showcomments addcomment',
    mobile: {
        plugins: 'print preview powerpaste casechange importcss tinydrive searchreplace autolink autosave save directionality advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker textpattern noneditable help formatpainter pageembed charmap mentions quickbars linkchecker emoticons advtable'
    },
    menu: {
        tc: {
            title: 'TinyComments',
            items: 'addcomment showcomments deleteallconversations'
        }
    },
    importcss_append: true,
    templates: [{
            title: 'New Table',
            description: 'creates a new table',
            content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
        },
        {
            title: 'Starting my story',
            description: 'A cure for writers block',
            content: 'Once upon a time...'
        },
        {
            title: 'New list with dates',
            description: 'New List with dates',
            content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
        }
    ],
    template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
    template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
    height: 600,
    image_caption: true,
    quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
    noneditable_noneditable_class: 'mceNonEditable',
    toolbar_mode: 'sliding',
    spellchecker_whitelist: ['Ephox', 'Moxiecode'],
    tinycomments_mode: 'embedded',
    content_style: '.mymention{ color: gray; }',
    contextmenu: 'link image imagetools table configurepermanentpen',
    a11y_advanced_options: true,
    setup: function(editor) {
        editor.on('change', function() {
            editor.save();
        });
    }
});
</script>
<script>
$(document).ready(function() {
    $('#submit_button').click(function(e) {
        e.preventDefault();
        var e_name1 = $('input[name=e_name]').val();
        if (!$('.category_select').val()) {
            alert('Please select product category');
        }
        if (!$('.subcategory_select').val()) {
            alert('Please select product sub category');
        }
        var name = 'products';
        $.ajax({
            url: "<?=base_url('products/valid_slug')?>",
            type: "POST",
            data: {
                e_name: e_name1,
                table: name
            },
            success: function(response) {
                if (response == 'ok') {
                    alert('Slug Name is already exist.');
                    $('input[name=e_name]').css('border', '1px solid red');
                    $('#error_name').html(
                        '<span style="color:red">Slug Name is already exist. </span>');
                } else {
                    $('#product_form').submit();
                    alert('Successfully Added');
                }
            }
        });
    });
    $('#hide_select').change(function() {
        var categoryId = $(this).find('option:selected').val();
        $.ajax({
            url: "<?=base_url('products/subcategory_option')?>",
            type: "POST",
            data: "categoryId=" + categoryId,
            success: function(response) {
                var data = JSON.parse(response);
                $(".subcategory_select").html(data.html);
                $(".showcategory_select").html(data.html1);
            },
        });
        if (categoryId == 19 || categoryId == 20) {
            $('.div_hide').hide();

        } else {
            $('.div_hide').show();
        }
    });
    // $('.category_select').change(function() {
    //   var categoryId = $(this).find('option:selected').val();
    //   alert(categoryId);
    //     $.ajax({
    //         url: "<?=base_url('products/subcategory_option')?>",
    //         type: "POST",
    //         data: "categoryId="+categoryId,
    //         success: function (response) {
    //             $(".subcategory_select").html(response);
    //         },
    //     });

    // });
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#image')
                .attr('src', e.target.result)
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function check_price1() {

    if ($("#250gm").is(":checked")) {
        document.getElementById('price1').style.visibility = 'visible';
    } else {
        document.getElementById('price1').style.visibility = 'hidden';
        document.getElementById('price1').value = "";
    }
}

function check_price2() {
    if ($("#500gm").is(":checked")) {
        document.getElementById('price2').style.visibility = 'visible';
    } else {
        document.getElementById('price2').style.visibility = 'hidden';
        document.getElementById('price2').value = "";
    }
}

function check_price3() {

    if ($("#1kg").is(":checked")) {
        document.getElementById('price3').style.visibility = 'visible';
    } else {
        document.getElementById('price3').style.visibility = 'hidden';
        document.getElementById('price3').value = "";
    }
}
</script>