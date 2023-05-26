<?php
include 'partials/header.php';
?>

<section class="form__section wide-100">
    <div class="container">
        <div class='d-flex justify-content-between'>
            <div class='dashboardLeft'>
                <ul>
                    <li>
                        <a href="#">
                            Add Blog
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Manage Blogs
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Add Doctor
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Manage Doctors
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Add Service
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Manage Services
                        </a>
                    </li>
                </ul>
            </div>



            <div class="dashBoard-table w-100  ">
                <h4 class='h4-xs '>
                    Manage Users
                </h4>
                <table class="abox-4-table w-100 blue-table p-3">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Lorem ipsum dolor sit amet.
                            </td>
                            <td>
                                Wild life
                            </td>
                            <td>
                                <a href="#" class='btn btn-lime'>
                                    Edit
                                </a>
                            </td>
                            <td>
                                <a href="#" class='btn  btn-orange'>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>



<?php
include '../partials/footer.php';
?>