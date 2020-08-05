using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace VMS_2._0
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            Passenger Passenger = new Passenger();
            Passenger.ShowDialog();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            Bus BusDetails = new Bus();
            BusDetails.ShowDialog();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            Emp Emp = new Emp();
            Emp.ShowDialog();
        }
    }
}
