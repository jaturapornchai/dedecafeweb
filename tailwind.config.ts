import type { Config } from "tailwindcss";

const config: Config = {
  content: [
    "./pages/**/*.{js,ts,jsx,tsx,mdx}",
    "./components/**/*.{js,ts,jsx,tsx,mdx}",
    "./app/**/*.{js,ts,jsx,tsx,mdx}",
  ],
  theme: {
    extend: {
      colors: {
        // บ้านเชียง Theme - สีดินเผา วัฒนธรรมอีสาน
        earthen: {
          50: '#faf7f4',
          100: '#f5ede5',
          200: '#e8d5c4',
          300: '#d9b89e',
          400: '#c89a78',
          500: '#b67c58',  // สีดินเผาหลัก
          600: '#a36446',
          700: '#88503a',
          800: '#704335',
          900: '#5d3830',
        },
        isaan: {
          50: '#fef9ee',
          100: '#fdf0d7',
          200: '#fadead',
          300: '#f6c479',
          400: '#f2a443',  // สีทอง อีสาน
          500: '#ee8a1f',
          600: '#d96d15',
          700: '#b45314',
          800: '#924218',
          900: '#763717',
        },
        silk: {
          50: '#fef4f2',
          100: '#fde7e2',
          200: '#fbd4ca',
          300: '#f7b6a5',
          400: '#f28d72',  // สีผ้าไหม
          500: '#e66747',
          600: '#d34d2f',
          700: '#b13e25',
          800: '#923623',
          900: '#793324',
        },
      },
      fontFamily: {
        mitr: ['Mitr', 'sans-serif'],
        sarabun: ['Sarabun', 'sans-serif'],
      },
      backgroundImage: {
        'pottery-pattern': "url('/patterns/pottery.svg')",
        'thai-pattern': "url('/patterns/thai.svg')",
      },
    },
  },
  plugins: [],
};

export default config;
