<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viewer's ideas</title>
</head>
<body>
<h3>Ideas section</h3>
    
    <hr>

    <div class="row">
        <div class="col-md-8">
            <table class="table table-stripped" id="userTable">
                <thead>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Title</th>
                    <th>Idea Description</th>
                    <th>Date</th>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        fetch('<?php echo base_url(); ?>admin/dashboard/index/', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(responseData => {
                // Display the response data
                const data = responseData.users;
                let tab = '';
                data.forEach(function(user) {
                    tab += `<tr>
                                <td>${user.Name}</td>
                                <td>${user.Phone}</td>
                                <td>${user.Title}</td>
                                <td>${user.IdeaDescription}</td>
                                <td>${user.Date}</td>
                            </tr>`;
                })
                document.getElementById('tbody').innerHTML = tab;

                // Initialize DataTable
                $(document).ready(function() {
                    $('#userTable').DataTable();
                });
            })
            .catch(error => {
                console.error('Error:', error);
            });
    </script>

</body>

</html>
