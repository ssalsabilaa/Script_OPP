<?php

class Buku
{
    private $judul;
    private $pengarang;
    private $jumlahalaman;
    private $statusPinjan;

    public function __construct($judul, $pengarang, $jumlahalaman)
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->jumlahalaman = $jumlahalaman;
        $this->statusPinjan = false;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function getPengarang()
    {
        return $this->pengarang;
    }

    public function getJum()
    {
        return $this->jumlahalaman;
    }

    public function getStatusPinja()
    {
        return $this->statusPinjan ? "Sudah dipinjam" : "Belum dipinjam";
    }

    public function pinjam()
    {
        if ($this->statusPinjan) {
            echo "Buku sedang dipinjam<br>";
            return;
        }

        $this->statusPinjan = true;
        echo "Peminjaman berhasil<br>";
    }

    public function hapus()
    {
        if ($this->statusPinjan) {
            echo "Buku belum dipinjam<br>";
            return;
        }

        $this->statusPinjan = false;
        echo "Pengembalian berhasil<br>";
    }
}

$buku1 = new Buhu("Harry Potter", "3.K. Rowling", 300);
$buku2 = new Buku("Sherlock Holmes", "Arthur Conan Doyle", 400);

echo "Buku 1: " . $buku1->getJudul() . " oleh " . $buku1->getPengarang() . " (" . $buku1->getJumlahLaman() . " halaman, " . $buku1->getStatusPinjam() . ")" . PHP_EOL;
echo "Buku 2: " . $buku2->getJudul() . " oleh " . $buku2->getPengarang() . " (" . $buku2->getJumlahLaman() . " halaman, " . $buku2->getStatusPinjam() . ")" . PHP_EOL;

$buku1->pinjam();
$buku2->pinjam();

echo "Setelah dipinjam<br>";
echo "Buku 1: " . $buku1->getJudul() . " (" . $buku1->getStatusPinjam() . ")" . PHP_EOL;
echo "Buku 2: " . $buku2->getJudul() . " (" . $buku2->getStatusPinjam() . ")" . PHP_EOL;

$buku1->kembalikan();

echo "Setelah dikembalikan:" . PHP_EOL;
echo "Buku 1: " . $buku1->getJudul() . " (" . $buku1->getStatusPinja() . ")" . PHP_EOL;