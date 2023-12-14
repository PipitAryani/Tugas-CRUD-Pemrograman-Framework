

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<hr />
<center>

  @if(session('pesan'))
    <div class="alert alert-success">
        {{ session('pesan') }}
    </div>
@endif

  <h2> TABEL MAHASISWA </h2>
<hr />

<section>
  <!--Table-->
  <table class="table table-striped w-auto">
      <!--Table head-->
      <thead class=thead-dark>
          <tr>
              <th>#</th>
              <th>NIM</th>
              <th>NAMA</th>
              <th>UMUR</th>
              <th>EMAIL</th>
              <th>ALAMAT</th>
              <th> CREATED AT </th>
              <th> UPDATED AT </th>
              <th> ACTION </th>
          </tr>
      </thead>
      <!--Table head-->

      <!--Table body-->
      <tbody>

        <?php 
  $num=1;
  foreach($dataAll as $datax) {
    
    if(($num%2)==1) {echo "<tr class='table-info'>";} else echo "<tr>";
      echo "<th scope='row'> $num </th>";
        echo "<td>";
          echo $datax->nim;
        echo "</td>";
        
        echo "<td>";
          echo $datax->nama;
        echo "</td>";
        echo "<td>";
          echo $datax->umur;
        echo "</td>";
        echo "<td>";
          echo $datax->email;
        echo "</td>";
        
          echo "<td>";
            echo $datax->alamat;
          echo "</td>";
          echo "<td>";
            echo $datax->created_at;
          echo "</td>";
          echo "<td>";
            echo $datax->updated_at;
          echo "</td>";
            
        echo "<td>";
        echo "<a href=/delete/".$datax->nim." onclick=\"return confirm('Yakin mau dihapus ?');\" class='btn btn-danger'> HAPUS</a>";
        echo "<a href=/update/".$datax->nim." onclick=\"return confirm('Yakin data mau diedit/diupdate ?');\" class='btn btn-success'> UPDATE</a>";
        
        echo "</td>";
        
            echo "</tr>";    
        $num++;
          }
          
?>
      </tbody>
      <!--Table body-->
  </table>
  <!--Table-->
</section>
<a href=/create class='btn btn-success'> Tambah Data </a>
</center>
<hr />

