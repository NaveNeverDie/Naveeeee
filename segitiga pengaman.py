# Program sederhana untuk mencetak segitiga sama kaki terpusat dari karakter yang diinput

# Meminta input dari pengguna
karakter = input("Masukkan karakter: ")
jumlah = int(input("Masukkan jumlah: "))

# Mencetak segitiga sama kaki terpusat
for i in range(1, jumlah + 1):
    # Jumlah spasi di depan untuk memusatkan
    spasi = ' ' * (jumlah - i)
    # Jumlah karakter di baris tersebut
    chars = karakter * (2 * i - 1)
    # Cetak baris
    print(spasi + chars)