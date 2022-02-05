<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <title>Edit Announcement</title>
        <meta name="description" content="FYP management system">
		<meta name="author" content="Bryan Tan CB20081">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/coordinator.css">
        <script src='tinymce/js/tinymce/tinymce.min.js'></script>
        <script>
            tinymce.init({
            selector: 'textarea#Faculty_Announcement',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            imagetools_cors_hosts: ['picsum.photos'],
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: true,
            autosave_ask_before_unload: true,
            autosave_interval: "30s",
            autosave_prefix: "{path}{query}-{id}-",
            autosave_restore_when_empty: false,
            autosave_retention: "2m",
            image_advtab: true,
            /*content_css: '//www.tiny.cloud/css/codepen.min.css',*/
            link_list: [
                { title: 'My page 1', value: 'https://www.codexworld.com' },
                { title: 'My page 2', value: 'https://www.xwebtools.com' }
            ],
            image_list: [
                { title: 'My page 1', value: 'https://www.codexworld.com' },
                { title: 'My page 2', value: 'https://www.xwebtools.com' }
            ],
            image_class_list: [
                { title: 'None', value: '' },
                { title: 'Some class', value: 'class-name' }
            ],
            importcss_append: true,
            file_picker_callback: function (callback, value, meta) {
                /* Provide file and text for the link dialog */
                if (meta.filetype === 'file') {
                    callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
                }
            
                /* Provide image and alt text for the image dialog */
                if (meta.filetype === 'image') {
                    callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
                }
            
                /* Provide alternative source and posted for the media dialog */
                if (meta.filetype === 'media') {
                    callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
                }
            },
            templates: [
                { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
                { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
                { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
            ],
            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
            height: 300,
            width: 1000,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: "mceNonEditable",
            toolbar_mode: 'sliding',
            contextmenu: "link image imagetools table",
        });
        </script>
        <style>
            body {
            min-height: 400px;
            margin-bottom: 100px;
            clear: both;
            }
        </style>
    
    </head>
    <body>
        <header>
            <img src= ./img/logo1.png width=15%>
            <h1>StudFYP</h1>
        </header>
        <br>
        <div class="navbar_mid">
            <a href="coordinatorPage.php">Home</a>
            <a href="student-supervisor.php">Student</a>
            <a class="active" href="announcement.php">Announcement</a>
            <a href="view_progress_listing.php">View Progress Listing</a>
            <a href="rubric_list.php">Rubric</a>
            <a href="" style="float:right">Logout</a>
        </div>
        
            <main>
                <div style="width: 400px;">
                <h3 style="display: inline-block">Edit Announcement</h3>
                </div>
                
                <?php
                include "databaseFYP.php";

                if(count($_POST)>0) {
                    mysqli_query($conn, "UPDATE announcement SET aID='".$_POST['aID']."', topic='".$_POST['topic']."', setdate='".$_POST['setdate']."', Faculty_Code='".$_POST['Faculty_Code']."', Faculty_Announcement='".$_POST['Faculty_Announcement']."' WHERE aID='".$_POST['aID']."'");
                    $message = "Announcement update successfully";
                }
                $result = mysqli_query($conn, "SELECT * FROM announcement WHERE aID='". $_GET['aID']."'") or die(mysqli_error($conn));  // select query
                $row = mysqli_fetch_array($result);   // fetch data
                ?>
                
                <form action="" method="POST">
                <div><?php if(isset($message)) { echo "<script>alert('".$message ."')</script>" ; } ?></div>
                    <input type='hidden' value="<?php echo $row['aID']; ?>" name='aID'>
                    Title: <br>
                    <input type="text" name="topic" placeholder="topic" value="<?php echo $row['topic']; ?>"><br>
                    Date: <br>
                    <input type="date" name="setdate" required value="<?php echo $row['setdate']; ?>"><br><br>
                    Message: <br>
                    <textarea name="Faculty_Announcement" id="Faculty_Announcement" ><?php echo $row['Faculty_Announcement']; ?></textarea><br><br>
                    Faculty: <br>
                    <select name="Faculty_Code" id="Faculty_Code" value="<?php echo $row['Faculty_Code']; ?>">
                        <option value="FK, HS, SE, ME">All Faculty</option>
                        <option value="FK">FK</option>
                        <option value="HS">HS</option>
                        <option value="SE">SE</option>
                        <option value="ME">ME</option>
                    </select><br><br>
                    <input type="button" name="back" value="Back" onclick="window.location.href='announcement.php'"> 
                    <input type="submit" name="save" value="Save">
                </form>

            </main>
            <?php mysqli_close($conn); ?>
        <footer>
        <div class="footer">
            <a href="coordinatorPage.php">Home</a> |
            <a href="">Helps</a> |
            <a href="">Privacy</a> |
            <a href="">Logout</a> 
            <br>
            <h5>Copyright 2021; All Rights Reserved.</h5>
        </div>
        </footer>
    </body>
</html>