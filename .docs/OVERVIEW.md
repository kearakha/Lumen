# OVERVIEW — Lumen

## Apa ini
Lumen adalah aplikasi **tanya-jawab atas dokumen**. User mengunggah dokumen (PDF/teks), lalu bertanya, dan Lumen menjawab **berdasarkan isi dokumen itu** — bukan dari pengetahuan umum model AI. Secara teknis ini disebut **RAG (Retrieval-Augmented Generation)**: cari potongan dokumen yang relevan dulu, baru minta model menjawab dari potongan itu.

## Kenapa ada
Ini proyek flagship portfolio untuk membuktikan kemampuan **AI application engineering** menggunakan stack yang sudah dikuasai (Laravel). Bukti > klaim: satu app yang live, dipakai, dan terukur.

## Target user (untuk demo/portfolio)
Siapa saja yang punya dokumen panjang dan malas membacanya penuh — misal mahasiswa dengan jurnal, atau tim dengan dokumen internal. Untuk portfolio, cukup skenario: "upload dokumen, tanya, dapat jawaban akurat berbasis dokumen".

## Platform
Web app. Backend + frontend cukup Laravel (Blade atau Inertia+Next kalau mau, tapi jangan sampai memperlambat inti). Prioritas: inti RAG jalan dan live, bukan UI mewah.

## Batas
Lihat Non-Goals di `../PRD.md`. Intinya: tidak training model, tidak fine-tuning, tidak menumpuk fitur. Fokus membuktikan rantai: LLM API → prompt → RAG → eval → deploy.
