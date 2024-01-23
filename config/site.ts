export type SiteConfig = typeof siteConfig

export const siteConfig = {
  name: "Next.js",
  description:
    "Beautifully designed components built with Radix UI and Tailwind CSS.",
  mainNav: [
    {
      title: "Home",
      href: "app/add",
      
    },
    {
      title: "Artikel",
      href: "/",
      
    },
    {
      title: "Kontak",
      href: "/",
      
    },
  ],
  links: {
    twitter: "https://twitter.com/shadcn",
    github: "https://github.com/rioandikaaa",
    docs: "https://ui.shadcn.com",
  },
}
