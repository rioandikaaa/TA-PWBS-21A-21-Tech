// export default function AddDataForm() {
//   // State untuk menyimpan data form
//   const [formData, setFormData] = useState({
//     noAntri: '',
//     namaIbu: '',
//     namaAnak: '',
//     alamat: '',
//     statusAnak: '',
//     tinggiBadan: '',
//     dataAnak: '',
//   });

//   // Fungsi untuk menangani perubahan input form
//   const handleChange = (e) => {
//     const { name, value } = e.target;
//     setFormData((prevData) => ({
//       ...prevData,
//       [name]: value,
//     }));
//   };

//   // Fungsi untuk menangani pengiriman form
//   const handleSubmit = (e) => {
//     e.preventDefault();
//     // Lakukan sesuatu dengan data yang dikumpulkan, seperti mengirim ke server
//     console.log('Data yang dikumpulkan:', formData);
//     // Reset form setelah pengiriman
//     setFormData({
//       noAntri: '',
//       namaIbu: '',
//       namaAnak: '',
//       alamat: '',
//       statusAnak: '',
//       tinggiBadan: '',
//       dataAnak: '',
//     });
//   };

//   return (
//     <section className="container grid items-center gap-6 pb-8 pt-6 md:py-10">
//       <div className="flex max-w-[980px] flex-col items-start gap-2">
//         <h1 className="text-3xl font-extrabold leading-tight tracking-tighter md:text-4xl">
//           Tambah Data
//         </h1>
//       </div>

//       {/* Form */}
//       <form onSubmit={handleSubmit} className="max-w-[700px]">
//         <div className="grid grid-cols-2 gap-4">
//           <div className="mb-4">
//             <label htmlFor="noAntri" className="block text-sm font-medium text-gray-700">
//               No Antri
//             </label>
//             <input
//               type="text"
//               id="noAntri"
//               name="noAntri"
//               value={formData.noAntri}
//               onChange={handleChange}
//               className="mt-1 p-2 border border-gray-300 rounded w-full"
//               required
//             />
//           </div>
//           <div className="mb-4">
//             <label htmlFor="namaIbu" className="block text-sm font-medium text-gray-700">
//               Nama Ibu
//             </label>
//             <input
//               type="text"
//               id="namaIbu"
//               name="namaIbu"
//               value={formData.namaIbu}
//               onChange={handleChange}
//               className="mt-1 p-2 border border-gray-300 rounded w-full"
//               required
//             />
//           </div>
//           {/* Lanjutkan untuk setiap field form */}
//         </div>

//         <div className="mt-6">
//           <button
//             type="submit"
//             className={`bg-sky-500 px-4 py-2 text-white rounded-full ${buttonVariants.primary}`}
//           >
//             Tambahkan Data
//           </button>
//         </div>
//       </form>
//     </section>
//   );
// }