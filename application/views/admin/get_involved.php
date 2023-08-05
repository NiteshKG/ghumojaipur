<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"></style>
    <style rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"></style>
    <script data-search-pseudo-elements="" defer="" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous"></script>
    <title>Viewer's ideas</title>
</head>

<body>
    <h3>Get involved</h3>

    <hr>

    <div class="row">
        <div class="col-md-8">
            <table class="table table-stripped" id="userTable">
                <thead>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Interest</th>
                    <th>Message</th>
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
        fetch('<?php echo base_url(); ?>admin/dashboard/work/', {
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
                                <td>${user.name}</td>
                                <td>${user.phone}</td>
                                <td>${user.Interest}</td>
                                <td>${user.message}</td>
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
