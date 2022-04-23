<?php  require_once('src/partials/header.php'); ?> 

<!-- Formulario bootstrap -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
                <h1 class="mb-3"><?php echo $this->title; ?></h1>
                
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
                <h5>Courses</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Start</th>
                        <th scope="col">End</th>
                        <th scope="col">Active</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($this->courses as $course): ?>
                            <tr class="<?php print($course['active'] == "1" ? 'table-primary' : 'table-danger'); ?>">
                                <td><?php print($course['id_course']); ?></td>
                                <td><?php print($course['name']); ?></td>
                                <td><?php print($course['description']); ?></td>
                                <td><?php print($course['date_start']); ?></td>
                                <td><?php print($course['date_end']); ?></td>
                                <td><?php print($course['active'] == "1" ? 'Yes' : 'No'); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php  require_once('src/partials/footer.php'); ?>