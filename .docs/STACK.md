# STACK — Lumen

Setiap pilihan punya alasan. Kalau mau ganti, ganti sadar, bukan default.

| Lapis | Pilihan | Kenapa |
|---|---|---|
| Backend | **Laravel** | Sudah dikuasai. Fokus belajar ke bagian AI, bukan framework baru. |
| Database | **PostgreSQL** | Perlu untuk pgvector. |
| Vector store | **pgvector** (extension Postgres) | Tidak perlu vector DB terpisah (Pinecone/Qdrant). Satu database, lebih sedikit hal untuk dikelola. Skill "RAG dengan pgvector" juga persis yang dicari di pasar Laravel+AI. |
| LLM API | **Anthropic** atau **OpenAI** via Laravel HTTP client | Cukup satu provider dulu. Anthropic punya SDK; keduanya gampang dari HTTP client. Jangan pakai framework agent dulu. |
| Embeddings | Provider embedding dari LLM yang sama (mis. OpenAI `text-embedding-3-small`) | Sederhana, murah, cukup untuk RAG dasar. |
| Queue | **Laravel Queue + Redis** | Panggilan AI harus jadi background job dengan retry (rate limit handling). Ini penanda "paham produksi". |
| Streaming | **SSE (Server-Sent Events)** di Laravel | Jawaban muncul real-time, UX chat. Tambahkan di M2, jangan di awal. |
| Frontend | Blade (paling cepat) atau Inertia + React | Pilih yang tidak memperlambat inti. UI mewah = Non-Goal. |
| Deploy | VPS / Laravel Forge / Railway + domain | M4. App yang tidak live = tidak ada. |

## Nice-to-have (jangan sekarang)
- pgvector → vector DB lain: hanya kalau lowongan target memintanya.
- Cost/token tracking, observability: masuk v2, jadi bahan cerita produksi.
- Python: setelah Lumen live (M6), untuk baca kode + skrip eval.

## Versi
Isi versi konkret saat scaffold (PHP, Laravel, Postgres, pgvector). Jangan biarkan kosong — versi yang tercatat memudahkan debugging nanti.
