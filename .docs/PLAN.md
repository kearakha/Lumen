# PLAN — Lumen

Milestone berurutan. **Jangan lompat.** Tiap milestone menghasilkan artefak nyata + verifikasi. Agent berhenti di akhir tiap milestone dan menunggu konfirmasi.

> Estimasi minggu bersifat kasar dan mengasumsikan waktu terbatas (kuliah + bengkod + skripsi jalan). Sesuaikan sendiri — ini bukan deadline, ini urutan.

---

## M0 — Setup & LLM pertama
- [ ] Laravel + Postgres (pgvector) siap.
- [ ] Panggil LLM API via HTTP client, dapat jawaban.
- [ ] Endpoint `/ask` sederhana: pertanyaan → jawaban LLM.
- **Verifikasi:** kirim pertanyaan, dapat jawaban dari model.
- **Artefak:** endpoint `/ask` jalan.

## M1 — RAG minimal
- [ ] Upload dokumen → ekstraksi → chunk → embed → simpan di pgvector.
- [ ] Pertanyaan → retrieve chunk → prompt → jawaban berbasis dokumen.
- **Verifikasi:** upload dokumen berisi fakta unik (yang model tak mungkin tahu), tanyakan, jawaban benar merujuk dokumen itu.
- **Artefak:** Lumen menjawab dari isi dokumen, bukan pengetahuan umum.

## M2 — Produksi-grade dasar
- [ ] Panggilan AI jadi queue job + retry saat rate limit.
- [ ] Streaming jawaban (SSE).
- [ ] Error handling: API gagal / dokumen kosong / retrieval nihil.
- **Verifikasi:** beri input rusak / putus koneksi — sistem gagal dengan anggun.
- **Artefak:** Lumen responsif & tidak pecah saat error.

## M3 — Evaluasi ← *pembeda utama, jangan skip*
- [ ] Set 15–20 pertanyaan dengan jawaban yang diketahui benar.
- [ ] Ukur: benar / halusinasi / gagal retrieve.
- [ ] Perbaiki satu hal (chunk size atau prompt), ukur lagi, bandingkan.
- **Verifikasi:** ada angka konkret + penjelasan apa yang memperbaikinya.
- **Artefak:** tabel eval sebelum-vs-sesudah + catatan singkat.

## M4 — Deploy publik
- [ ] Live di URL publik. Repo: `lumen-rag` (hindari rancu dgn micro-framework Laravel lama).
- [ ] README: apa ini, cara pakai, keputusan teknis, hasil eval, keterbatasan jujur.
- **Verifikasi:** kirim link ke teman, mereka pakai tanpa dijelaskan.
- **Artefak:** URL publik + repo rapi.

## M5 — Konten & lamaran (paralel setelah M4)
- [ ] 1 post teknis "RAG dengan Laravel + pgvector" (sekalian bahan sharing Bengkel Koding).
- [ ] 20 lamaran tertarget, resume disesuaikan per lowongan, Lumen sebagai bukti utama.
- **Verifikasi:** ada log lamaran yang bisa dihitung + post terbit.

## M6 — Python fungsional (SETELAH Lumen live, jangan sebelumnya)
- [ ] Cukup untuk baca kode AI orang lain + skrip eval sederhana.
- **Verifikasi:** bisa baca satu repo RAG Python dan menjelaskan alurnya.
