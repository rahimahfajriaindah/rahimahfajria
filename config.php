<?php
	// koneksi
	$conn = mysqli_connect("localhost", "root", "", "perpustakaan");

	function query($query){
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [] ;
		while ($row = mysqli_fetch_assoc($result)) {

			$rows [] =  $row;
		}
		return $rows;
	}

	function tambah($data){
		global $conn;

	$nama = htmlspecialchars($data["nama"]);
	$nim = htmlspecialchars($data["nim"]);
	$prodi = htmlspecialchars($data["prodi"]);
	$namabuku = htmlspecialchars($data["namabuku"]);
	$kodebuku = htmlspecialchars($data["kodebuku"]);
    $tglpinjaman = $data["tglpinjaman"];
    $tglpengembalian = $data["tglpengembalian"];
    $nohp = htmlspecialchars($data["nohp"]);

	$query = "INSERT INTO buku
                VALUES
                ('','$nama', '$nim', '$prodi', '$namabuku', '$kodebuku', '$tglpinjaman', '$tglpengembalian', '$nohp')
                ";
	mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    
    }

	function hapus($id){
		global $conn;
		mysqli_query($conn, "DELETE FROM buku WHERE id = $id");
		return mysqli_affected_rows($conn);
	}

function ubah($data){
	global $conn;

	$id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nim = $data["nim"];
	$prodi = htmlspecialchars($data["prodi"]);
	$namabuku = htmlspecialchars($data["namabuku"]);
	$kodebuku = $data["kodebuku"];
    $tglpinjaman = $data["tglpinjaman"];
    $tglpengembalian = $data["tglpengembalian"];
    $nohp = $data["nohp"];

	
    $query = "UPDATE buku SET
				nama = '$nama',
    			nim = '$nim',
                prodi = '$prodi',
                namabuku = '$namabuku',
                kodebuku = '$kodebuku',
				tglpinjaman = '$tglpinjaman',
    			tglpengembalian = '$tglpengembalian',
    			nohp = '$nohp'
    			WHERE id = $id
    			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function cari($keyword){
	$query = "SELECT * FROM buku
				WHERE
				nama LIKE '%$keyword%' OR
				nim LIKE '%$keyword%' 
				";
	return query($query);
}

?>