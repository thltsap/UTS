<?php
namespace App\Models;
    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\Warehouse as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Database\Eloquent\Model; //Model Eloquent

    class Warehouse extends Model //Definisi Model
{
    protected $table="warehouses"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas

     
    protected $primaryKey = 'id_barang'; // Memanggil isi DB Dengan primarykey
    public $timestamps= false;

    /**
 * The attributes that are mass assignable. *
 * @var array
 */
    protected $fillable = [
        'id_barang',
        'kode_barang',
        'nama_barang',
        'kategori_barang',
        'harga',
        'qty',
        'tanggal_barang_masuk',
        'tanggal_barang_keluar',
        ];
 };
