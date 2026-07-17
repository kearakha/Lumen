# RULES — Lumen

Aturan yang wajib diikuti agent tiap sesi.

## Cara kerja
- **Milestone per milestone.** Kerjakan sesuai `PLAN.md`. Berhenti di akhir tiap milestone, tunggu konfirmasi sebelum lanjut.
- **Jelaskan sebelum lanjut.** Setiap keputusan teknis dijelaskan: bahasa membumi dulu, baru istilah teknis. Pemilik proyek harus paham, bukan cuma punya app yang jalan.
- **Trade-off ditunjukkan.** Kalau ada pilihan (chunk size, model, prompt strategy), tunjukkan opsi + alasan pilihan, jangan diam-diam putuskan.
- **Update `STATE.md`** setiap milestone selesai.

## Scope
- Jangan kerjakan apa pun di **Non-Goals** PRD.
- Godaan menambah fitur di luar milestone aktif → catat di `STATE.md` sebagai "parkir", jangan dikerjakan.
- Satu proyek selesai > banyak fitur setengah jadi.

## Teknis
- Panggilan AI **selalu** lewat queue job dengan retry — jangan panggil LLM sinkron di request utama (kecuali untuk uji cepat di M0).
- Setiap fitur retrieval harus bisa diverifikasi: tunjukkan chunk mana yang diambil untuk sebuah jawaban.
- Error handling wajib: API gagal, dokumen kosong, retrieval nihil — semua harus gagal dengan anggun, bukan 500 telanjang.
- Simpan prompt di tempat yang mudah diubah (config/file terpisah), bukan hardcoded tersebar.
- Jangan taruh API key di kode. `.env` saja.

## Bahasa
- Komunikasi dengan pemilik: **Bahasa Indonesia**.
- Respons proporsional: penjelasan singkat untuk hal kecil, detail untuk keputusan besar.
