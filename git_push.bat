@echo off
:: Mengubah direktori kerja ke lokasi file bat ini berada
cd /d "%~dp0"

echo ==============================================
echo  Git Auto Push - Sistem Pendaftaran Santri
echo ==============================================
echo.

:: Cek status git
echo Memeriksa perubahan file...
"C:\Program Files\Git\cmd\git.exe" status
echo.

:: Menambahkan semua perubahan
echo Menambahkan perubahan ke staging area...
"C:\Program Files\Git\cmd\git.exe" add .
echo.

:: Meminta pesan commit dari user
set /p commit_msg="Masukkan pesan deskripsi perubahan (Tekan ENTER untuk 'Update berkala'): "
if "%commit_msg%"=="" set commit_msg=Update berkala

:: Melakukan commit
echo.
echo Melakukan commit...
"C:\Program Files\Git\cmd\git.exe" commit -m "%commit_msg%"
echo.

:: Melakukan push
echo Mengirim data (push) ke GitHub...
"C:\Program Files\Git\cmd\git.exe" push origin main
echo.

echo ==============================================
echo  Selesai! Perubahan Anda telah terkirim.
echo ==============================================
echo.
pause
