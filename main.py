import pandas as pd
import numpy as np
from pyDecision.algorithm import dematel_method
from import_data import *

first_data = read_data()
data = set_up_data(first_data)

dataset = np.array(data)
D_plus_R, D_minus_R, weights = dematel_method(dataset, size_x = 15, size_y = 10)
