# PRD — Lumen & Rakha sebagai AI Application Engineer

> **Jenis dokumen:** Career-as-Product PRD.
> **Produk:** dua lapis. (1) *Rakha* — engineer yang employable di jalur AI application. (2) *Lumen* — proyek flagship yang jadi bukti utamanya.
> **Nada:** realistis, bukan optimistik. Setiap klaim harus bisa diverifikasi sendiri.
> **Tanggal:** Juli 2026 · **Status:** Draft v1

---

## 0. Baseline Jujur (titik nol, jangan dilewati)

Ini kondisi apa adanya. Dokumen ini tidak akan berpura-pura kamu lebih dekat ke tujuan daripada kenyataannya.

- **Skill sekarang:** Laravel (backend). Next.js + shadcn/ui di frontend. Belum Python, belum pernah deploy sistem AI yang dipakai orang lain.
- **Status kerja:** 0 job offer sejauh ini.
- **Realita pasar 2026:** Untuk role "AI Engineer" murni, Python adalah *table stakes* — hampir semua lowongan mensyaratkannya, dan bukan dicantumkan sebagai skill melainkan dibuktikan lewat proyek. Artinya: **jalur "AI/ML Engineer $200k" tidak realistis untuk kamu dalam waktu dekat.** Menyebut itu sebagai target hanya akan bikin frustrasi.
- **Tapi ada celah yang cocok:** Kekurangan pasar bukan "orang yang bisa training model", melainkan "orang yang bisa membangun, men-deploy, dan merawat sistem yang memakai LLM di produksi". Background backend-mu adalah aset di sini, bukan nol.
- **Diagnosa "0 offer":** Kemungkinan besar bukan karena kamu tidak kompeten, tapi karena **belum ada satu pun sistem yang deployed, dipakai, dan terukur** yang bisa kamu tunjuk. Portfolio yang isinya "pernah belajar X" kalah dari satu proyek yang "live, dipakai, dan ini angkanya".

**Posisi realistis yang dituju dokumen ini:** *AI Application Engineer / AI-augmented Backend Engineer* — orang yang menempelkan kemampuan LLM ke produk nyata menggunakan stack yang sudah dikuasai, lalu pelan-pelan menambah yang kurang.

---

## 1. Goals

Apa yang produk ini harus capai. Semua bisa dicek, tidak ada yang berupa perasaan.

- **G1 — Punya 1 proyek flagship (Lumen) yang live dan bisa diakses publik.** Bukan di localhost, bukan screenshot. URL yang bisa dibuka orang lain.
- **G2 — Lumen membuktikan rantai skill AI-application inti:** panggil LLM API dari backend, prompt terstruktur, RAG (retrieval dari dokumen), dan minimal satu mekanisme evaluasi kualitas jawaban.
- **G3 — Bisa menjelaskan setiap keputusan teknis di Lumen** saat ditanya (kenapa pgvector, kenapa chunking segini, kenapa jawaban bisa salah dan bagaimana kamu ukur). Ini yang membedakan "pernah nonton tutorial" vs "pernah membangun".
- **G4 — Menutup gap Python di level fungsional** — cukup untuk membaca kode AI orang lain dan menulis skrip evaluasi/data-prep sederhana. Bukan jadi Python expert.
- **G5 — Melamar secara efektif:** minimal 20 lamaran tertarget (bukan tembak semua), masing-masing resume disesuaikan ke lowongan, dengan Lumen sebagai bukti utama.

---

## 2. Non-Goals (bagian "jangan optimistik")

Ini yang **sengaja tidak dikejar**. Menuliskannya penting supaya kamu tidak membuang waktu ke hal yang terlihat keren tapi tidak menggerakkan tujuan.

- **NG1 — Bukan mengejar role AI/ML Research atau training model dari nol.** Itu jalur berbeda, butuh matematika/Python/riset bertahun-tahun. Bukan pintu masukmu.
- **NG2 — Bukan fine-tuning model sendiri.** Terlalu jauh, mahal, dan tidak dibutuhkan untuk membuktikan skill application. RAG + prompt sudah cukup untuk membedakan diri.
- **NG3 — Bukan mengumpulkan sertifikat/course.** Sertifikat tidak menggerakkan hiring untuk profil ini; proyek deployed yang menggerakkan. Course hanya alat, bukan output.
- **NG4 — Bukan membangun banyak proyek setengah jadi.** Satu Lumen yang selesai dan live > lima repo yang berhenti di README. (Ini pelajaran yang sudah kamu tahu: "taman, bukan monumen".)
- **NG5 — Bukan target gaji/level tertentu di dokumen ini.** Angka gaji besar yang beredar di artikel adalah pasar US senior. Menjadikannya patokan hanya akan menipu diri. Target di sini: *dapat pekerjaan pertama di jalur ini*, bukan puncaknya.
- **NG6 — Bukan menunggu "siap" dulu baru melamar.** Melamar dimulai saat Lumen live, bukan saat kamu merasa cukup pintar.

---

## 3. Target Persona & Positioning

Siapa yang kamu sasar, dan bagaimana kamu memposisikan diri.

- **Target pemberi kerja:** perusahaan/agency/startup yang sedang menempelkan fitur AI ke produk existing — bukan lab AI. Contoh sinyal di lowongan: "integrate LLM", "RAG", "AI feature", "OpenAI/Anthropic API", "Laravel/PHP + AI".
- **Positioning satu kalimat:** *"Backend engineer (Laravel) yang bisa membangun fitur bertenaga-LLM sampai produksi — bukan cuma prototipe di notebook."*
- **Kenapa ini menang:** perusahaan yang butuh AI di produk mereka lebih butuh orang yang paham sistem produksi (queue, API, deploy, error handling) daripada orang yang cuma bisa jalankan model di Jupyter. Kamu justru kuat di sisi ini.

---

## 4. Stack / Skill Requirements

Dibagi tegas: yang **wajib dikuasai** vs yang **boleh nanti**. Jangan belajar di luar daftar ini sebelum yang wajib beres.

### Must-have (fondasi Lumen)
| Skill | Kenapa | Sudah punya? |
|---|---|---|
| Laravel (backend, queue, HTTP client) | Basis Lumen | ✅ |
| Panggil LLM API dari backend (Anthropic/OpenAI SDK via HTTP client) | Inti AI-application | ❌ belajar |
| Prompt terstruktur (system prompt, JSON output, kelola histori) | Kontrol kualitas jawaban | ❌ belajar |
| RAG: embeddings + vector store (pgvector di PostgreSQL) | Skill pembeda utama di pasar | ❌ belajar |
| Chunking & retrieval dasar | Bagian dari RAG | ❌ belajar |
| Streaming response (SSE di Laravel) | UX chat real-time | ❌ belajar |
| Queue + retry untuk panggilan AI (rate limit handling) | Tanda "paham produksi" | sebagian ✅ |
| Eval sederhana (ukur jawaban benar/salah, minimal manual scoring set) | Sinyal terkuat "beneran pernah build" | ❌ belajar |
| Deploy ke publik (VPS/Forge/Railway + domain) | G1 tidak tercapai tanpa ini | sebagian ✅ |

### Nice-to-have (boleh nanti, JANGAN duluan)
- Python fungsional (baca kode + skrip eval sederhana) — kejar setelah Lumen v1 live.
- Vector DB lain (Pinecone/Qdrant) — hanya kalau lowongan target memintanya.
- LangChain/framework agent — opsional; untuk profil ini, memahami konsepnya cukup.
- Observability AI (logging token, cost tracking) — bagus untuk cerita produksi, tambahkan di v2.

**Aturan main:** kalau sebuah skill tidak ada di tabel must-have dan bukan diminta lowongan yang sedang kamu incar, itu masuk NG4 — jangan dikerjakan sekarang.

---

## 5. Milestones

Bertahap. Setiap milestone menghasilkan **artefak nyata** yang bisa ditunjuk. Tidak ada milestone yang selesai karena "sudah paham" — hanya karena ada bukti.

### M0 — Setup & LLM pertama (target: 1 minggu)
- Laravel bersih, panggil Anthropic/OpenAI API via HTTP client, dapat jawaban.
- **Artefak:** endpoint `/ask` yang menerima pertanyaan dan mengembalikan jawaban LLM.
- **Verifikasi:** kamu kirim pertanyaan, dapat jawaban dari model. Selesai.

### M1 — RAG minimal (target: 2 minggu)
- Upload dokumen (PDF/teks) → chunk → embed → simpan di pgvector.
- Pertanyaan → retrieve chunk relevan → masukkan ke prompt → jawaban berbasis dokumen.
- **Artefak:** Lumen bisa menjawab pertanyaan **dari isi dokumen yang diupload**, bukan dari pengetahuan umum model.
- **Verifikasi:** upload dokumen yang berisi fakta unik (yang model tidak mungkin tahu), tanyakan, jawaban benar mengacu ke dokumen itu.

### M2 — Produksi-grade dasar (target: 1–2 minggu)
- Panggilan AI jadi queue job dengan retry saat rate limit.
- Streaming jawaban ke frontend (SSE).
- Error handling: apa yang terjadi kalau API gagal / dokumen kosong / retrieval nihil.
- **Artefak:** Lumen tidak pecah saat error dan terasa responsif.
- **Verifikasi:** matikan koneksi/berikan input rusak — sistem gagal dengan anggun, bukan 500 telanjang.

### M3 — Evaluasi (target: 1 minggu) ← *pembeda utama*
- Buat set 15–20 pertanyaan dengan jawaban yang kamu tahu benar.
- Ukur: berapa yang dijawab benar, berapa yang "halusinasi", berapa yang gagal retrieve.
- Catat hasilnya. Perbaiki satu hal (chunk size / prompt), ukur lagi, bandingkan.
- **Artefak:** tabel eval "sebelum vs sesudah" + tulisan singkat kenapa berubah.
- **Verifikasi:** kamu punya angka konkret dan bisa menjelaskan apa yang memperbaikinya.

### M4 — Deploy publik (target: 1 minggu)
- Lumen live di URL publik (repo: `lumen-rag` untuk hindari rancu dengan micro-framework Laravel lama).
- README: apa ini, cara pakai, keputusan teknis, hasil eval, keterbatasan jujur.
- **Artefak:** URL yang bisa dibuka siapa saja + repo rapi.
- **Verifikasi:** kirim link ke teman, mereka bisa pakai tanpa kamu jelaskan.

### M5 — Konten & lamaran (berjalan paralel setelah M4)
- Tulis 1 post teknis "membangun RAG dengan Laravel + pgvector" (juga jadi bahan sharing Bengkel Koding).
- 20 lamaran tertarget, resume disesuaikan per lowongan, Lumen sebagai bukti utama.
- **Artefak:** post + log lamaran (tanggal, perusahaan, respons).
- **Verifikasi:** ada log yang bisa dihitung, bukan "sudah lamar beberapa".

### M6 — Python fungsional (setelah Lumen live, jangan sebelumnya)
- Cukup untuk baca kode AI orang lain + tulis skrip eval sederhana.
- **Verifikasi:** kamu bisa membaca satu repo RAG Python dan menjelaskan alurnya.

---

## 6. Success Criteria (yang bisa kamu verifikasi sendiri)

Bukan "merasa lebih pede". Semua item di bawah bisa dijawab ya/tidak tanpa menipu diri.

**Level 1 — Bukti skill (harus tercapai):**
- [ ] Lumen live di URL publik, orang lain bisa pakai tanpa bantuanmu.
- [ ] Lumen menjawab dari dokumen yang diupload, terbukti dengan fakta unik.
- [ ] Ada tabel eval dengan angka sebelum-sesudah minimal satu perbaikan.
- [ ] Kamu bisa menjelaskan tiap keputusan teknis tanpa buka catatan.

**Level 2 — Bukti pasar (indikator jalur benar):**
- [ ] Sudah 20 lamaran tertarget dengan resume yang disesuaikan.
- [ ] Minimal 1 post teknis terbit.
- [ ] Ada respons dari pemberi kerja (balasan/interview) — bukan sekadar terkirim.

**Level 3 — Tujuan akhir dokumen ini:**
- [ ] Dapat 1 tawaran/kontrak/magang di jalur AI-application atau backend+AI.

> Catatan jujur: Level 1 sepenuhnya di kendalimu. Level 2 di kendalimu. Level 3 **tidak** — dipengaruhi pasar, timing, keberuntungan. Karena itu keberhasilan dokumen ini diukur di Level 1–2. Kalau Level 1–2 beres tapi Level 3 belum, masalahnya bukan skill-mu — itu volume lamaran & waktu, yang solusinya berbeda.

---

## 7. Risks & Failure Modes (di mana ini bisa gagal)

- **R1 — Scope creep (paling mungkin).** Godaan menambah fitur/skill di luar tabel must-have. Mitigasi: apa pun yang tidak menggerakkan milestone berikutnya = tunda. Ini pola lamamu ("setup dari spekulasi"); waspadai.
- **R2 — Berhenti sebelum deploy.** Proyek mati di 80% karena bagian deploy terasa membosankan. Mitigasi: M4 (deploy) tidak bisa ditawar; proyek yang tidak live dianggap tidak ada.
- **R3 — Melewati M3 (eval).** Eval terasa tidak seru dibanding fitur. Padahal ini justru pembeda dari kandidat lain. Mitigasi: perlakukan M3 sebagai wajib, bukan bonus.
- **R4 — Nama "Lumen" rancu** dengan micro-framework Laravel lama saat orang search. Mitigasi: repo & branding pakai `lumen-rag` / `lumen.app`, bukan "Lumen" telanjang.
- **R5 — Menunda lamaran sampai "sempurna".** Mitigasi: NG6 — lamar begitu M4 live, sambil terus memperbaiki.
- **R6 — Target salah kaprah.** Kalau kamu diam-diam masih mengincar "AI Engineer $200k", kamu akan menilai diri dengan tolok ukur yang salah dan merasa gagal padahal jalurmu benar. Mitigasi: baca ulang bagian 0 dan NG5.

---

## 8. Ringkasan Satu Layar

| | |
|---|---|
| **Produk** | Rakha sebagai AI Application Engineer, dibuktikan oleh Lumen |
| **Lumen** | RAG document-QA, full Laravel + pgvector |
| **Target role** | AI Application / AI-augmented Backend Engineer (bukan ML Research) |
| **Wajib** | LLM API, prompt terstruktur, RAG, eval, deploy publik |
| **Sengaja tidak** | fine-tuning, training model, kejar sertifikat, banyak proyek setengah jadi |
| **Ukuran sukses** | Lumen live + eval terukur + 20 lamaran tertarget + 1 post |
| **Di luar kendali** | dapat/tidaknya offer — jangan dijadikan ukuran kegagalan skill |
