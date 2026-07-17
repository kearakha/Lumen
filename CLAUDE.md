# CLAUDE.md — Lumen

Proyek **Lumen**: RAG document-QA, dibangun full di **Laravel + pgvector**. Ini proyek flagship untuk portfolio AI-application engineer. Tujuannya bukan cuma app jadi, tapi **pemilik proyek (Rakha) paham tiap keputusan teknis**.

## Baca dulu tiap sesi
- `PRD.md` — spec & alasan proyek ini ada.
- `.docs/PLAN.md` — milestone aktif. Kerjakan sesuai urutan.
- `.docs/RULES.md` — aturan wajib.
- `STATE.md` — progres terakhir, apa yang sudah passed/failed, pelajaran.

## Cara kerja
- **Milestone per milestone.** Berhenti di akhir tiap milestone, jelaskan keputusan, tunggu konfirmasi sebelum lanjut.
- **Jelaskan, jangan cuma eksekusi.** Setiap keputusan teknis dijelaskan dengan bahasa membumi dulu, baru istilah teknisnya.
- **Update `STATE.md`** setelah tiap milestone: passed / failed / rule worth remembering.
- Jangan kerjakan apa pun di **Non-Goals** PRD. Godaan di luar milestone → parkir di `STATE.md`, jangan dikerjakan.

## Stack singkat
Laravel · PostgreSQL + pgvector · LLM API (Anthropic/OpenAI via HTTP client) · queue untuk panggilan AI · SSE untuk streaming. Detail di `.docs/STACK.md`.
