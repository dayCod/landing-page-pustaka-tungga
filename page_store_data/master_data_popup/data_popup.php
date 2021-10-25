<?php
include 'C:/xampp/htdocs/landing_page/env.php';
?>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">Table Data Popup</h4>
                </div>
                <div class="card-body">
                  
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-success">
                        <th>
                          ID
                        </th>
                        <th>
                          Nama
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Instansi / Pekerjaan
                        </th>
                        <th>
                          Created At
                        </th>
                        <th>
                          Updated At
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      <?php
                      
                        $no = 1;
                        $sql = mysqli_query($conn,'SELECT * from data_popup ORDER BY id desc');
                        while($data = mysqli_fetch_array($sql)){

                      
                      ?>
                        <tr>
                          <td><?php echo $no?></td>
                          <td><?php echo $data['nama'];?></td>
                          <td><?php echo $data['email'];?></td>
                          <td><?php echo $data['instansi']; ?></td>
                          <td><?php echo $data['created_at'];?></td>
                          <td><?php echo $data['updated_at'];?></td>
                          <td>
                            <a href="function/delete.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                      <?php
                      $no++;
                        }
                      ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>