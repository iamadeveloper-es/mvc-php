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
                <?php if(isset($this->sqlMssg)){ ?>
                <div class="alert-wrapper mt-3">
                    <?php if($this->sqlMssg == "Item deleted successfully") { ?>
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p><?php echo $this->sqlMssg; ?></p>
                    </div>
                    <?php }else { ?>
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Uppss!</h4>
                        <p><?php echo $this->sqlMssg; ?></p>
                    </div>
                    <?php }; ?>
                </div>
                <?php }; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
                <?php if(isset($this->courses) && count($this->courses) > 0): ?>
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
                                <td><a href="index.php?c=admin&a=deleteCourse&id=<?php print($course['id_course']);?>" class="btn btn-primary btn-sm">Update</a></td>
                                <td><a href="index.php?c=admin&a=deleteCourse&id=<?php print($course['id_course']);?>" class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                        
                    </tbody>
                </table>
                <?php else:  ?>
                    <h3>There are no courses, create one!</h3>
                <?php endif;  ?>
                <form action="post" method="index.php?c=admin&createCourse">
                    <table class="table">
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
                            <tr>
                                <td>
                                    id
                                </td>
                                <td>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" name="course-name" placeholder="Course name">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" name="course-desc" placeholder="Course description">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group mb-3">
                                        <input type="date" class="form-control" name="course-start" placeholder="Course start">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group mb-3">
                                        <input type="date" class="form-control" name="course-end" placeholder="Course ending">
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-group mb-3">
                                        <input type="checkbox" name="course-active">
                                    </div>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary mt-4">Create</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php  require_once('src/partials/footer.php'); ?>