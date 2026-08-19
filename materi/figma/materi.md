# 🎨 Figma untuk Web Designer — Materi & Tutorial Dasar

Dokumen ini adalah panduan pembelajaran Figma yang dirancang khusus untuk **Web Designer**, dengan contoh dan konteks nyata desain website. Setiap poin dilengkapi dengan **tutorial langkah demi langkah**.

---

## 🟦 BAGIAN 1: SETUP & ANTARMUKA (Poin 1–4)

---

### 1. Apa Itu Figma & Mengapa Web Designer Menggunakannya?

**Penjelasan:**
Figma adalah design tool berbasis browser yang digunakan untuk mendesain antarmuka website, mulai dari wireframe hingga tampilan akhir (high-fidelity mockup). Berbeda dengan Photoshop yang berbasis pixel editing, Figma dirancang khusus untuk desain UI/UX dengan sistem vector yang scalable.

**Kenapa Figma untuk Web?**
- Gratis untuk pemula (hingga 3 proyek aktif)
- Kolaborasi real-time seperti Google Docs
- Inspect panel menghasilkan nilai CSS langsung
- Digunakan oleh Tokopedia, Gojek, Traveloka, dan mayoritas startup teknologi
- Figma Dev Mode memudahkan handoff ke web developer

**Perbandingan tool:**

| Tool | Keunggulan | Kelemahan untuk Web |
|------|-----------|-------------------|
| Figma | Kolaborasi, gratis, CSS handoff | - |
| Adobe XD | Terintegrasi Adobe | Berbayar, ditutup 2023 |
| Sketch | Ekosistem lengkap | Hanya Mac |
| Canva | Mudah dipakai | Tidak untuk UI design |

---

### 2. Setup: Akun, Workspace & File Pertama

**Tutorial — Membuat File Baru untuk Proyek Website:**

```
1. Buka figma.com → Sign up dengan email/Google
2. Klik tombol "New design file" di dashboard
3. Rename file: klik judul "Untitled" → ketik nama proyek
   Contoh: "Landing Page — Kopi Nusantara"
4. Buat halaman (pages) untuk organisasi:
   - Klik "+" di tab Pages (pojok kiri atas)
   - Halaman yang direkomendasikan:
     ├── 🎨 Design System
     ├── 📐 Wireframe
     ├── 🖥️ Desktop Design
     └── 📱 Mobile Design
```

**Tips:**
Gunakan struktur pages ini di setiap proyek website agar rapi dan mudah di-review klien atau developer.

---

### 3. Mengenal Antarmuka Figma untuk Konteks Web Design

**5 Area Utama yang Sering Dipakai Web Designer:**

```
┌─────────────────────────────────────────────────────────┐
│  [Toolbar]  Move | Frame | Shape | Text | Pen | Plugin  │
├────────────┬────────────────────────────┬────────────────┤
│  Layers    │                            │  Properties    │
│  Panel     │        CANVAS              │  Panel         │
│            │                            │                │
│  Pages     │   (Area desain website)    │  Width/Height  │
│  Assets    │                            │  Fill/Stroke   │
│  --------  │                            │  Auto Layout   │
│  Components│                            │  Constraints   │
└────────────┴────────────────────────────┴────────────────┘
```

**Shortcut penting untuk Web Designer:**

| Shortcut | Fungsi |
|----------|--------|
| F | Frame tool (bikin kanvas halaman) |
| R | Rectangle (bikin kotak/div) |
| T | Text tool |
| Ctrl+G | Group elements |
| Ctrl+Alt+K | Jadikan komponen |
| Ctrl+Shift+H | Hide/show UI Figma |
| Ctrl+/ | Quick search command |
| Spacebar+drag | Pan/geser canvas |

---

### 4. Frame Web: Ukuran Kanvas yang Benar

**Penjelasan:**
Di web design, setiap "halaman" dibuat dalam **Frame** dengan ukuran yang sesuai dengan device target.

**Tutorial — Membuat Frame dengan Ukuran Web:**

```
1. Tekan F (Frame tool)
2. Di Properties Panel kanan, pilih preset:
   - Desktop  → 1440 x 900 px  (standar industri)
   - Tablet   → 768 x 1024 px
   - Mobile   → 390 x 844 px   (iPhone 14)
3. Atau ketik manual di kolom W dan H
4. Klik frame → rename di Layers Panel:
   "Homepage — Desktop"
```

**Standar ukuran web yang umum dipakai:**

| Device | Lebar | Keterangan |
|--------|-------|------------|
| Desktop | 1440px | Standar desain web modern |
| Laptop | 1280px | Alternatif desktop |
| Tablet | 768px | iPad portrait |
| Mobile | 390px | iPhone 14 |
| Mobile (Android) | 360px | Galaxy S-series |

> **Catatan:** Konten website biasanya dibatasi max-width 1200px di tengah frame 1440px — sama seperti `max-width: 1200px; margin: auto` di CSS.

---

## 🟩 BAGIAN 2: TOOLS DASAR UNTUK DESAIN WEB (Poin 5–10)

---

### 5. Shape Tools untuk Elemen Web

**Penjelasan:**
Di web design, hampir semua elemen adalah kombinasi kotak (rectangle) — navbar, card, button, section. Memahami shape tool adalah dasar segalanya.

**Tutorial — Mendesain Card Produk Sederhana:**

```
1. Tekan R → drag untuk buat rectangle
   W: 320, H: 400 → ini adalah "card container"

2. Atur corner radius: 16px
   (di Properties Panel → "Corner radius" → 16)
   Ini setara dengan border-radius: 16px di CSS

3. Tambahkan rectangle lagi untuk area gambar:
   W: 320, H: 200 → taruh di atas card
   Corner radius: 16px top, 0px bottom

4. Tambahkan 2 rectangle kecil untuk:
   - Judul produk: W: 200, H: 20
   - Harga: W: 100, H: 20
   Taruh di bawah area gambar

5. Tambahkan rectangle untuk tombol:
   W: 280, H: 48, Corner: 8px
```

**Hasil:** Wireframe card produk tanpa teks, siap diisi konten.

---

### 6. Text Tool untuk Web Typography

**Penjelasan:**
Web typography mengikuti skala hierarki yang konsisten. Figma mendukung semua Google Fonts secara langsung.

**Tutorial — Membuat Typography Scale untuk Website:**

```
1. Tekan T → klik canvas → ketik teks
2. Di Properties Panel, atur:

   H1 — Heading Utama:
   Font: Inter, Weight: Bold (700), Size: 56px

   H2 — Subheading Section:
   Font: Inter, Weight: SemiBold (600), Size: 36px

   H3 — Card Title:
   Font: Inter, Weight: Medium (500), Size: 24px

   Body — Teks paragraf:
   Font: Inter, Weight: Regular (400), Size: 16px
   Line Height: 150% (setara line-height: 1.5 di CSS)

   Caption — Label kecil:
   Font: Inter, Weight: Regular (400), Size: 12px
```

**Tips Google Fonts di Figma:**
Ketik nama font di kolom font (Inter, Poppins, Plus Jakarta Sans) — Figma otomatis load dari Google Fonts tanpa install.

---

### 7. Color & Fill untuk Web

**Tutorial — Membuat Palet Warna untuk Website:**

```
1. Klik elemen → di Properties Panel klik "Fill"
2. Ganti mode ke "Hex" → masukkan kode warna

Contoh palet untuk website modern:
   Primary   : #3B82F6  (biru)
   Secondary : #10B981  (hijau)
   Dark      : #1E293B  (teks utama)
   Gray      : #64748B  (teks sekunder)
   Light     : #F8FAFC  (background)
   White     : #FFFFFF  (card background)

3. Untuk background section:
   Fill → pilih "Linear Gradient"
   Dari #3B82F6 ke #6366F1 (biru ke ungu)
```

---

### 8. Pen Tool untuk Ikon & Ilustrasi Web

**Penjelasan:**
Pen tool digunakan untuk membuat ikon custom atau elemen dekoratif (wave, blob) yang sering muncul di website modern.

**Tutorial — Membuat Wave Separator antar Section:**

```
1. Tekan P (Pen tool)
2. Klik titik awal di pojok kiri bawah frame
3. Klik titik di tengah frame (atas), tahan drag → 
   buat kurva
4. Klik titik di pojok kanan bawah frame
5. Klik kembali ke titik awal untuk menutup path
6. Isi dengan warna putih (#FFFFFF)
   Taruh di batas antara section berwarna dan putih

Hasil: wave/gelombang sebagai pemisah section — 
desain website yang lebih dinamis.
```

---

### 9. Images & Placeholder di Desain Web

**Penjelasan:**
Figma memungkinkan memasukkan gambar langsung sebagai Fill, bukan sebagai elemen terpisah — sangat mirip dengan `background-image` di CSS.

**Tutorial — Menambah Gambar ke Card & Hero Section:**

```
Cara 1 — Drag & Drop:
1. Seret file gambar dari File Explorer ke canvas Figma
2. Resize sesuai kebutuhan

Cara 2 — Fill dengan gambar:
1. Buat rectangle (area gambar)
2. Klik Fill → klik ikon gambar (Image)
3. Pilih "Choose image" → pilih file gambar
4. Atur "Image fit":
   - Fill   → seperti object-fit: cover (paling sering dipakai)
   - Fit    → seperti object-fit: contain
   - Crop   → bisa geser posisi gambar

Cara 3 — Gunakan Unsplash Plugin (gratis):
1. Klik menu Plugins → Community Plugins
2. Cari "Unsplash" → install
3. Pilih rectangle → jalankan Unsplash
4. Cari foto → klik → otomatis masuk ke rectangle
```

---

### 10. Boolean Operations untuk Ikon Web

**Penjelasan:**
Boolean operations memungkinkan menggabungkan atau memotong shape — teknik dasar membuat ikon sendiri.

**Tutorial — Membuat Ikon Search:**

```
1. Buat ellipse: W: 24, H: 24 (lingkaran kaca)
   Fill: none, Stroke: #1E293B, stroke width: 2px

2. Buat rectangle tipis: W: 2, H: 8 (gagang kaca)
   Fill: #1E293B
   Rotasi: -45 derajat

3. Posisikan gagang di pojok kanan bawah lingkaran

4. Select keduanya → klik kanan → "Group Selection"
   Atau Ctrl+G

Teknik Boolean lebih lanjut:
- Union     → gabung jadi 1 shape (logika OR)
- Subtract  → potong (logika NOT)
- Intersect → ambil irisan saja (logika AND)
- Exclude   → kebalikan intersect
```

---

## 🟨 BAGIAN 3: LAYOUT HALAMAN WEB (Poin 11–15)

---

### 11. Layout Grid untuk Web Design

**Penjelasan:**
Website modern menggunakan sistem kolom (column grid). Di Figma, kita bisa menambahkan column grid yang identik dengan CSS Grid atau Bootstrap grid.

**Tutorial — Setup Column Grid Standar Web:**

```
1. Klik frame desktop (1440px)
2. Di Properties Panel → klik "+" di bagian "Layout Grid"
3. Ubah dari "Grid" ke "Columns"

Pengaturan untuk Desktop (1440px):
   Count     : 12
   Margin    : 120px   (kiri & kanan)
   Gutter    : 24px    (jarak antar kolom)
   Color     : #FF0000, Opacity: 10%

Pengaturan untuk Mobile (390px):
   Count     : 4
   Margin    : 16px
   Gutter    : 16px

4. Desain semua elemen mengikuti garis kolom ini
   Ini setara dengan container Bootstrap/Tailwind
```

---

### 12. Auto Layout — Kunci Desain Web Responsif

**Penjelasan:**
Auto Layout adalah fitur terpenting di Figma untuk web designer. Cara kerjanya identik dengan **Flexbox CSS** — elemen otomatis menyesuaikan ukuran isinya.

**Tutorial — Membuat Navbar dengan Auto Layout:**

```
1. Buat 3 elemen navbar:
   - Logo (rectangle W:120, H:32)
   - Nav links (group teks: Home | Tentang | Layanan | Kontak)
   - Button "Mulai Sekarang" (rectangle W:160, H:44)

2. Select semua 3 elemen → Shift+A (Add Auto Layout)

3. Atur di Properties Panel:
   Direction     : Horizontal  (setara flex-direction: row)
   Alignment     : Center      (setara align-items: center)
   Distribution  : Space between (setara justify-content: space-between)
   Padding H     : 40px        (setara padding: 0 40px)
   Padding V     : 0px

4. Set frame lebar Auto Layout = Fill Container
   Ini setara dengan width: 100%

Hasilnya: navbar yang otomatis merespons lebar frame!
```

**Tutorial — Membuat Button dengan Auto Layout:**

```
1. Buat teks "Daftar Sekarang"
2. Shift+A → tambah Auto Layout
3. Padding: 12px (vertikal) x 24px (horizontal)
   Setara dengan padding: 12px 24px di CSS
4. Corner radius: 8px

Sekarang teks bisa diubah → button otomatis menyesuaikan!
```

---

### 13. Constraints untuk Elemen Web Responsif

**Penjelasan:**
Constraints menentukan bagaimana elemen berperilaku ketika **ukuran frame berubah** — mirip seperti `position: fixed/sticky` atau unit `%` di CSS.

**Tutorial — Navbar yang Selalu Full Width:**

```
1. Klik frame navbar
2. Di Properties Panel → Constraints:
   Horizontal : Left and Right  → selalu stretch lebar penuh
   Vertical   : Top             → selalu di atas

Contoh lain:
   Tombol di kanan → Horizontal: Right
   Footer → Vertical: Bottom
   Overlay modal → Horizontal: Center, Vertical: Center
```

---

### 14. Layers & Penamaan untuk Handoff ke Developer

**Penjelasan:**
Penamaan layer yang baik = developer lebih mudah membaca desain. Ini kebiasaan profesional yang membedakan desainer junior dan senior.

**Konvensi Penamaan Layer untuk Web:**

```
❌ Cara buruk (default Figma):
   Rectangle 47
   Frame 12
   Group 5

✅ Cara profesional:
   hero-section
   ├── hero-background
   ├── hero-content
   │   ├── hero-badge (teks "New 🎉")
   │   ├── hero-title
   │   ├── hero-description
   │   └── hero-cta-group
   │       ├── btn-primary "Mulai Gratis"
   │       └── btn-secondary "Lihat Demo"
   └── hero-image

Shortcut rename: Double klik nama di Layers Panel
Atau Ctrl+R untuk rename
```

---

### 15. Sections — Mengelompokkan Halaman Web

**Penjelasan:**
Section (bukan frame) digunakan untuk mengelompokkan area desain yang berhubungan, seperti menandai area yang sudah selesai atau yang masih draft.

**Tutorial — Mengorganisir Halaman Landing Page:**

```
1. Shift+S → drag untuk buat section
2. Rename section untuk setiap area:
   ┌─────────────────────────────┐
   │  📌 Navbar                  │
   ├─────────────────────────────┤
   │  🦸 Hero Section            │
   ├─────────────────────────────┤
   │  ✨ Features Section        │
   ├─────────────────────────────┤
   │  💰 Pricing Section         │
   ├─────────────────────────────┤
   │  📞 CTA Section             │
   ├─────────────────────────────┤
   │  🦶 Footer                  │
   └─────────────────────────────┘

3. Sections bisa diberi warna untuk status:
   - Kuning = In Progress
   - Hijau = Done / Approved
   - Merah = Need Revision
```

---

## 🟧 BAGIAN 4: KOMPONEN WEB (Poin 16–22)

---

### 16. Komponen Dasar Web — Konsep & Cara Buat

**Penjelasan:**
Di web, elemen yang muncul berulang (button, card, navbar) harus dijadikan **komponen**. Sama seperti React Component atau Vue Component — ubah di satu tempat, semua berubah.

**Tutorial — Membuat Komponen Button:**

```
1. Desain button:
   - Rectangle: W:160, H:48, radius:8, fill:#3B82F6
   - Teks: "Tombol" — warna putih, Inter SemiBold 16px
   - Auto Layout: padding 12px x 24px

2. Select frame button → Ctrl+Alt+K
   (atau kanan → "Create component")

3. Ikon berlian 🔷 muncul di Layers Panel = komponen!

4. Untuk pakai di tempat lain:
   - Drag dari Assets Panel ke canvas, atau
   - Ctrl+D dari komponen (buat instance)

5. Edit Main Component → semua instance otomatis update
```

---

### 17. Variants — Button dengan Berbagai State

**Penjelasan:**
Variants memungkinkan satu komponen punya banyak tampilan berbeda. Untuk web, button punya setidaknya 3 state: **Default, Hover, Disabled**.

**Tutorial — Membuat Button Variants:**

```
1. Buat 3 versi button:
   Button Default  → fill: #3B82F6 (biru)
   Button Hover    → fill: #2563EB (biru lebih gelap)
   Button Disabled → fill: #CBD5E1 (abu), teks: #94A3B8

2. Select semua 3 button → klik "Combine as Variants"
   (muncul di Properties Panel atas)

3. Atur nama property di variants:
   Property name : "State"
   Values        : Default | Hover | Disabled

4. Sekarang instance button bisa di-switch state
   dari Properties Panel → pilih "State"

Tambahkan juga:
   Variant "Size" : Small | Medium | Large
   Variant "Type" : Primary | Secondary | Ghost | Danger
```

---

### 18. Komponen Card Produk (Studi Kasus)

**Tutorial — Card Produk Lengkap dengan Variants:**

```
1. Desain card produk (W:300, H:420):
   ┌────────────────────────┐
   │  [Gambar Produk]       │  H: 200px
   │                        │
   ├────────────────────────┤
   │  Nama Produk           │  H3, bold
   │  Deskripsi singkat...  │  body, gray
   │                        │
   │  ⭐ 4.8  (120 ulasan)  │  caption
   │                        │
   │  Rp 150.000            │  H3, primary color
   │  [Tambah ke Keranjang] │  button full width
   └────────────────────────┘

2. Jadikan komponen (Ctrl+Alt+K)

3. Buat variant:
   - "Out of Stock" → button disabled, tambah badge
   - "On Sale" → tambah badge merah "SALE", harga coret

4. Buat grid card:
   - Buat 4 instance card
   - Select semua → Shift+A (Auto Layout)
   - Direction: Horizontal, Gap: 24px
   - Ini = CSS: display:flex; gap:24px
```

---

### 19. Komponen Navbar & Footer

**Tutorial — Navbar Responsif:**

```
Navbar Desktop (1440px):
┌──────────────────────────────────────────────────────┐
│ 🔷 Logo    Home  Tentang  Layanan  Blog    [CTA Btn] │
└──────────────────────────────────────────────────────┘

1. Logo: komponen terpisah
2. Nav links: Auto Layout horizontal, gap: 32px
3. Jadikan semua Auto Layout horizontal, space-between
4. Padding: 0 120px, height: 72px
5. Tambahkan: Fill putih, drop shadow halus
   Shadow: x:0, y:2, blur:8, color:#00000010

Navbar Mobile (390px):
┌────────────────────┐
│ 🔷 Logo    ☰ Menu │
└────────────────────┘

6. Buat variant "Device": Desktop | Mobile
   Mobile version hanya tampil Logo + Hamburger icon
```

---

### 20. Component Properties untuk Komponen Fleksibel

**Tutorial — Card dengan Component Properties:**

```
Tambahkan properties ke Card komponen:

1. Select main component → klik "+" di Properties Panel

Boolean property "Show Badge":
   True  → badge "NEW" tampil
   False → badge hilang
   (setara dengan v-if / conditional rendering)

Text property "Product Name":
   Default: "Nama Produk"
   Setiap instance bisa ganti teks tanpa masuk ke dalam

Instance Swap "Product Image":
   Default: placeholder kotak abu
   Bisa diganti gambar produk berbeda per instance

2. Sekarang setiap card bisa dikustomisasi dari luar
   tanpa perlu "enter" ke dalam komponen
```

---

### 21. Menggunakan Figma Community (UI Kit Gratis)

**Tutorial — Install & Pakai UI Kit:**

```
1. Buka figma.com/community
2. Cari: "Material 3 Design Kit" (Google, gratis)
   atau "Untitled UI" (UI kit profesional, gratis)

3. Klik "Duplicate to your drafts"

4. Di file baru, buka Assets Panel (Ctrl+Alt+O)
   → klik ikon buku → pilih file UI kit sebagai library

5. Sekarang semua komponen UI kit bisa di-drag
   ke file desain kita

Rekomendasi UI Kit untuk Web Designer:
   - Untitled UI (komponen web paling lengkap)
   - Phosphor Icons (ikon gratis, ratusan pilihan)
   - Figma Material Design 3
   - Ant Design (UI kit untuk admin dashboard)
```

---

### 22. Icon Library di Figma

**Tutorial — Menggunakan Ikon di Desain Web:**

```
Cara 1 — Plugin Iconify (rekomendasi):
1. Menu → Plugins → Iconify
2. Cari nama ikon: "arrow-right", "home", "cart"
3. Pilih ikon → Insert
4. Tersedia 150.000+ ikon dari berbagai library

Cara 2 — Copy SVG dari Heroicons/Phosphor:
1. Buka heroicons.com atau phosphoricons.com
2. Pilih ikon → Copy SVG
3. Di Figma: Ctrl+V → ikon langsung masuk sebagai vector

Cara 3 — Feather Icons Plugin:
1. Plugins → Feather Icons
2. Pilih ikon yang dibutuhkan → Insert
3. Ukuran standar ikon web: 20px atau 24px
```

---

## 🟥 BAGIAN 5: STYLING & DESIGN TOKEN (Poin 23–25)

---

### 23. Color Styles & Variables untuk Web

**Penjelasan:**
Color Styles = CSS Custom Properties (CSS Variables). Mengubah satu color style = mengubah warna di seluruh desain sekaligus.

**Tutorial — Membuat Color System:**

```
1. Di Properties Panel → klik ikon 4 titik di Fill
2. Klik "+" → buat style baru
3. Buat color styles berikut:

   Primary/500    : #3B82F6
   Primary/600    : #2563EB (hover state)
   Primary/100    : #DBEAFE (background ringan)

   Neutral/900    : #0F172A (teks utama)
   Neutral/600    : #475569 (teks sekunder)
   Neutral/200    : #E2E8F0 (border)
   Neutral/50     : #F8FAFC (background page)

   Semantic/Success : #10B981
   Semantic/Warning : #F59E0B
   Semantic/Error   : #EF4444
   Semantic/Info    : #3B82F6

4. Gunakan color styles ini untuk SEMUA elemen
   Jangan pernah set warna manual tanpa style!
```

---

### 24. Text Styles untuk Web Typography

**Tutorial — Membuat Typography System:**

```
1. Buat teks → atur ke font target → klik ikon 4 titik
2. "+" → save sebagai Text Style

Buat set text styles:

   Display/Large  : Inter 72px Bold     (hero headline)
   Display/Medium : Inter 56px Bold     (section headline)
   
   Heading/H1 : Inter 48px SemiBold
   Heading/H2 : Inter 36px SemiBold
   Heading/H3 : Inter 24px SemiBold
   Heading/H4 : Inter 20px Medium
   
   Body/Large  : Inter 18px Regular, LH: 160%
   Body/Medium : Inter 16px Regular, LH: 150%
   Body/Small  : Inter 14px Regular, LH: 150%
   
   Label/Large  : Inter 16px Medium
   Label/Medium : Inter 14px Medium
   Label/Small  : Inter 12px Medium
   
   Caption : Inter 12px Regular, LH: 140%

3. Terapkan ke semua teks di desain
```

---

### 25. Effect Styles — Shadow & Elevation untuk Web

**Tutorial — Shadow System:**

```
Buat effect styles untuk shadow web:

   Shadow/XS  : y:1, blur:2,  spread:0, #00000008
   Shadow/SM  : y:2, blur:4,  spread:0, #0000000D
   Shadow/MD  : y:4, blur:8,  spread:0, #00000010
   Shadow/LG  : y:8, blur:16, spread:0, #00000012
   Shadow/XL  : y:16,blur:32, spread:0, #00000014

Penggunaan:
   Card       → Shadow/MD
   Navbar     → Shadow/SM
   Dropdown   → Shadow/LG
   Modal      → Shadow/XL
   Button hover → Shadow/MD

Ini setara dengan box-shadow di CSS.
```

---

## ⬛ BAGIAN 6: PROTOTYPE & HANDOFF (Poin 26–28)

---

### 26. Prototype Dasar — Simulasi Website

**Tutorial — Membuat Prototype Landing Page:**

```
1. Buat 3 frame:
   - "Homepage"
   - "Pricing"
   - "Contact"

2. Klik tab "Prototype" (kanan atas Properties Panel)

3. Pilih elemen trigger:
   Klik nav link "Pricing" → drag panah biru ke frame Pricing

4. Atur interaction:
   Trigger     : On Click
   Action      : Navigate to → "Pricing"
   Animation   : Smart Animate (paling halus)
   Duration    : 300ms
   Easing      : Ease out

5. Klik "Present" (▶️ di kanan atas) untuk preview

Tips:
   - Pakai "Scroll behavior" di frame untuk simulasi scroll
   - "Fixed position" untuk navbar yang sticky
   - "Overlay" untuk modal/dropdown
```

---

### 27. Inspect Panel — Handoff ke Developer

**Penjelasan:**
Ini adalah fitur yang membuat Figma sangat berharga untuk tim. Developer bisa membaca semua nilai CSS langsung dari Figma.

**Tutorial — Cara Baca Desain dari Sisi Developer:**

```
Cara developer membaca desain:
1. Buka link share Figma (View only / Dev Mode)
2. Klik elemen → lihat panel kanan "Inspect"

Yang tersedia di Inspect Panel:
   Frame/Element:
   width: 320px
   height: 400px
   border-radius: 16px

   Fill:
   background: #3B82F6
   background: linear-gradient(135deg, #3B82F6, #6366F1)

   Typography:
   font-family: Inter
   font-size: 16px
   font-weight: 600
   line-height: 24px
   color: #1E293B

   Shadow:
   box-shadow: 0px 4px 8px rgba(0,0,0,0.06)

   Spacing (hover elemen lain sambil select):
   margin-top: 24px dari elemen lain
```

---

### 28. Figma Dev Mode & Export Aset

**Tutorial — Export Aset untuk Website:**

```
Export gambar/ikon:
1. Klik elemen → scroll ke bawah Properties Panel
2. Klik "+" di bagian "Export"
3. Pilih format:
   - PNG  : untuk gambar/foto (2x untuk retina)
   - SVG  : untuk ikon & ilustrasi (scalable!)
   - PDF  : untuk aset cetak
   - WebP : format modern, file lebih kecil

4. Multiple export sekaligus:
   - Pilih semua ikon → klik "Export X layers"

Tips untuk web:
   - Ikon → selalu export SVG
   - Foto produk → PNG 2x atau WebP
   - Logo → SVG (wajib!)
   - Ilustrasi → SVG jika tidak kompleks, PNG 2x jika kompleks

Figma Dev Mode (untuk handoff profesional):
   1. Aktifkan dari menu atas
   2. Developer bisa lihat semua value tanpa edit
   3. Copy kode CSS, iOS Swift, atau Android XML
   4. Lihat spacing antar elemen dengan presisi
```

---

## 📌 Ringkasan Struktur Materi

| Bagian | Poin | Fokus | Estimasi Waktu |
|--------|------|-------|----------------|
| 🟦 Setup & Antarmuka | 1–4 | Mengenal Figma, frame web | ~20 menit |
| 🟩 Tools Dasar Web | 5–10 | Shape, text, color, image | ~35 menit |
| 🟨 Layout Halaman | 11–15 | Grid, auto layout, constraints | ~30 menit |
| 🟧 Komponen Web | 16–22 | Component, variants, UI kit | ~45 menit |
| 🟥 Styling & Token | 23–25 | Color/text/effect styles | ~20 menit |
| ⬛ Prototype & Handoff | 26–28 | Prototype, inspect, export | ~20 menit |
| | | **Total** | **~170 menit** |

---

## 🎯 Proyek Akhir — Landing Page dengan Figma

Sebagai studi kasus akhir, peserta akan mendesain **Landing Page lengkap** yang mencakup:

```
✅ Halaman yang didesain:
   ├── 🖥️ Desktop (1440px)
   │   ├── Navbar (sticky)
   │   ├── Hero Section (headline + CTA + ilustrasi)
   │   ├── Features Section (3 kolom card)
   │   ├── Testimonial Section
   │   ├── CTA Section (banner dengan background gradient)
   │   └── Footer
   └── 📱 Mobile (390px)
       └── Versi responsif halaman yang sama

✅ Yang digunakan:
   - Column Grid 12 kolom
   - Auto Layout di semua container
   - Komponen: Button, Card, Navbar, Footer
   - Color Styles & Text Styles
   - Prototype klik antar halaman
   - Export ikon SVG & gambar PNG 2x
```

---

## 📝 Catatan Pengajar

- Gunakan file Figma Community **"Untitled UI"** sebagai referensi komponen
- Setiap tutorial dipraktikkan langsung bersama peserta
- Referensi: [Figma Learn](https://help.figma.com), [Figma for Beginners (YouTube)](https://www.youtube.com/@Figma)
- Materi Prototype lanjutan (Smart Animate, Scroll, Overlay) dibahas di pertemuan berikutnya
