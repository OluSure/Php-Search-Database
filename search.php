<?php
/* Get the search result and every record on the MySQL database. */
  ?>
  <script type="text/javascript">
        $(document).ready(function() {            
            $('#search thead th').each( function () {
                var title = $(this).text();
                $(this).html( ''+data+' <br><input type="text" class="filter" placeholder="Search '+data+'" />' );
            } );

            // DataTable
            var table = $('#search').DataTable({
                responsive: true,


                initComplete: function () {
                    // Apply the search
                    this.api().columns().every( function () {
                        var that = this;
                        $( 'input', this.header() ).on( 'keyup change clear', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        } );
                    } );
                }
            });

            $('.filter').on('click', function(e){
                e.stopPropagation();
            });         
        } );


    </script>
</head>
<body style="padding: 10px">
           <table id="search" class="table table-striped table-bordered" style="width: 100%">
                <thead>
                <tr>                 
                    <th><strong>Name</strong></td>
                    <th><strong>Email</strong></td>
                    <th><strong>State</strong></td>
                </tr>
                </thead>
                <tbody>
                <?php

                $sql = "SELECT * FROM ".$CONNECT["data_table"];

                if ($result = $mysqli->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>                         
                            <td><?php echo $data["name"]; ?></td>
                            <td><?php echo $data["email"]; ?></td>
                            <td><?php echo $data["states"]; ?></td>
                        </tr>
                    <?php }
                } else {
                ?>
                <tr><td colspan="5">Your search was not found or does not exist in the database.</td>
                    <?php
                    }
                    ?>
                </tbody>
                <tfoot>
                <tr>                 
                    <th><strong>Name</strong></td>
                    <th><strong>Email</strong></td>
                    <th><strong>State</strong></td>
                </tr>
                </tfoot>
            </table>
