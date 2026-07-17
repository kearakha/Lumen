# Prompt untuk Fable — Bangun Lumen

> Tempel ini sebagai instruksi awal. Baca `PRD.md` dan seluruh `.docs/` sebelum mulai.

---

Goal: Build the app described in `PRD.md` (project **Lumen** — RAG document-QA, full Laravel + pgvector).

Success (semua harus bisa kubuktikan sendiri):
1. Lumen menjawab pertanyaan **dari isi dokumen yang diupload** (bukan pengetahuan umum model) — terbukti dengan fakta unik yang model tidak mungkin tahu.
2. Ada tabel **eval sebelum-vs-sesudah** minimal satu perbaikan, dengan angka konkret (berapa benar, berapa halusinasi, berapa gagal retrieve).
3. Lumen **live di URL publik**, bisa dibuka & dipakai orang lain tanpa aku menjelaskan.

Mode kerja — PENTING, jangan autonomous penuh:
- Kerjakan **milestone per milestone** sesuai `PLAN.md` (M0 → M6). Jangan lompat.
- **Berhenti di akhir tiap milestone.** Jangan lanjut ke milestone berikutnya sebelum aku konfirmasi.
- Di tiap milestone, sebelum lanjut: **jelaskan keputusan teknis yang kamu ambil** (kenapa chunk size segini, kenapa prompt begini, kenapa struktur ini) dengan bahasa yang membuatku paham — bukan sekadar "sudah selesai". Tujuanku belajar, bukan cuma punya app.
- Kalau ada keputusan yang punya trade-off, tunjukkan pilihannya dan alasan kamu pilih yang mana. Aku yang putuskan kalau ragu.
- Ikuti aturan di `.docs/RULES.md` setiap sesi.

Setelah tiap milestone, update `STATE.md`:
- Apa yang **passed** (dengan cara verifikasinya).
- Apa yang **failed** atau belum beres.
- **Rule worth remembering** — pelajaran/gotcha yang layak diingat sesi berikutnya.

Jangan kerjakan apa pun yang ada di **Non-Goals** PRD (fine-tuning, training model, kejar fitur di luar tabel must-have). Kalau tergoda menambah sesuatu di luar milestone saat ini, catat di `STATE.md` sebagai "parkir", jangan dikerjakan.

Mulai dari **M0**. Konfirmasi dulu rencanamu untuk M0 sebelum menulis kode.
