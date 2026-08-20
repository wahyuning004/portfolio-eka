import './globals.css';

export const metadata = {
  title: 'Eka Wahyuning Tiyasa | Full-Stack Web Developer & S1 IT UNPAM',
  description: 'Portofolio Profesional Eka Wahyuning Tiyasa - Full-Stack Web Developer, Mahasiswa S1 Teknik Informatika UNPAM (Semester 7), Pemegang HKI Kemenkumham RI & Penulis Jurnal Ilmiah.',
  keywords: ['Eka Wahyuning Tiyasa', 'Full-Stack Developer', 'Laravel', 'Next.js', 'React', 'UNPAM', 'Teknik Informatika', 'HKI Kemenkumham', 'Portfolio'],
  authors: [{ name: 'Eka Wahyuning Tiyasa' }],
};

export default function RootLayout({ children }) {
  return (
    <html lang="id" className="dark scroll-smooth">
      <body className="bg-[#080b11] text-slate-100 antialiased selection:bg-cyan-500 selection:text-black">
        {children}
      </body>
    </html>
  );
}
