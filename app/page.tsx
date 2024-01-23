import Link from "next/link"

import { siteConfig } from "@/config/site"
import { buttonVariants } from "@/components/ui/button"



export default function IndexPage() {
  return (
    <section className="container grid items-center gap-6 pb-8 pt-6 md:py-10">
      <div className="flex max-w-[980px] flex-col items-start gap-2">
        <h1 className="text-3xl font-extrabold leading-tight tracking-tighter md:text-4xl">
          Selamat Datang <br className="hidden sm:inline" />
          Kesehatan Ibu Dan Anak
        </h1>
        <p className="max-w-[700px] text-lg text-muted-foreground">
          
        </p>
      </div>
      <div className="flex gap-4">
      <Link href={"/add"} className='mr-1 bg-sky-500 px-2.5 py-2.5 w-40 rounded-full text-white active:bg-black active:text-sky-300
        text-center'>Tambah Data</Link>

      <Link href={"/add"} className='mr-1 bg-sky-500 px-2.5 py-2.5 w-40 rounded-full text-white active:bg-black active:text-sky-300
        text-center'>Edit Data</Link>
        
      </div>
      <table className="w-full mt-8 border-collapse border border-gray-300">
        <thead>
          <tr className="bg-gray-200">
            <th className="border border-gray-300 py-2">No Antri</th>
            <th className="border border-gray-300 py-2">Nama Ibu</th>
            <th className="border border-gray-300 py-2">Nama Anak</th>
            <th className="border border-gray-300 py-2">Alamat</th>
            <th className="border border-gray-300 py-2">Status Anak</th>
            <th className="border border-gray-300 py-2">Tinggi Badan</th>
            <th className="border border-gray-00 py-2">Data Anak</th>
          </tr>
        </thead> 
        </table>
    
  

    </section>
  )
}
