<?php
include 'C:/xampp/htdocs/landing_page/env.php';
?>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">Table Data Company Relation</h4>
                </div>
                <div class="card-body">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                      Tambah Data
                    </button>
 
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Data Company Relation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="function/tambah-data.php" method="POST" enctype="multipart/form-data">
                              <input type="file" class="form-control" name="gambar">
                              <button type="submit" class="btn btn-success">Submit</button>
                              <button type="reset" class="btn btn-danger">Reset</button>
                            </form>
                          </div> 
                        </div>
                      </div>
                    </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-success">
                        <th>
                          ID
                        </th>
                        <th>
                          Gambar
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
                          $sql = mysqli_query($conn,'SELECT * from company_relation ORDER BY id desc');
                          while($data = mysqli_fetch_array($sql)){

                          
                        ?>
                        <tr>
                          <td><?php echo $no?></td>
                          <td><img src="images/<?php echo $data['gambar']?>" width="120px" height="100px"></td>
                          <td><?php echo $data['created_at']?></td>
                          <td><?php echo $data['updated_at']?></td>
                          <td>
                            <div class="btn-group">
                              <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                              <a href="function/delete.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </div>
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