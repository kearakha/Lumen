# STATE.md — Lumen

> Diupdate setelah tiap milestone. Format tetap. Entri terbaru di atas.
> Rolling: simpan 10 entri terakhir, sisanya arsip di bawah garis `--- ARSIP ---`.

## Milestone aktif
**M1 — RAG minimal** (belum mulai)

## Success criteria (dari PRD, yang harus bisa diverifikasi sendiri)
- [ ] Lumen menjawab dari isi dokumen upload (bukti: fakta unik).
- [ ] Tabel eval sebelum-vs-sesudah dengan angka konkret.
- [ ] Live di URL publik, dipakai orang lain tanpa penjelasan.

---

## Log

### 2026-07-18 — M0: Setup & LLM pertama
- **Passed:** Laravel 13.20 scaffold jalan. Endpoint `POST /api/ask` menerima `question`, panggil LLM, balas jawaban. Diverifikasi: `curl` ke `/api/ask` dengan pertanyaan "ibu kota Indonesia?" → jawab "Jakarta".
- **Failed / belum:** —
- **Rule worth remembering:**
  - Provider LLM ganti dari rencana awal (OpenAI/Anthropic) ke **Gemini** — OpenAI butuh billing aktif meski API key valid (`insufficient_quota`), Gemini punya free tier. Lihat `.docs/STACK.md`.
  - Model Gemini pakai alias `gemini-flash-latest`, bukan nama versi spesifik — beberapa versi (`gemini-2.5-flash`) sudah "no longer available to new users" meski masih muncul di list model.
  - Mesin ini punya 2 Postgres: EDB installer PG17 (port 5432, custom build path, tidak bisa dipasangi pgvector) dan Homebrew PG17 (port 5433, dipakai Lumen). Jangan bingung kalau `psql` default connect ke yang salah.
  - Homebrew Postgres pakai `trust` auth untuk koneksi lokal by default — tidak perlu password untuk `DB_USERNAME` di `.env`.
- **Parkir (godaan di luar scope):** —

<!--
Template entri berikutnya (copy saat mulai milestone baru):

### [tanggal] — M[n]: [nama milestone]
- **Passed:** (apa yang beres + cara verifikasinya)
- **Failed / belum:** (apa yang gagal / tertunda)
- **Rule worth remembering:** (gotcha / pelajaran untuk sesi berikutnya)
- **Parkir:** (ide di luar milestone ini — jangan dikerjakan, cukup dicatat)
-->

--- ARSIP ---
